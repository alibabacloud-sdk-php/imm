<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DetectFace
 *
 * @method string getSrcUris()
 * @method string getProject()
 */
class DetectFace extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'DetectFace';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUris() instead.
     *
     * @param string $srcUris
     *
     * @return $this
     */
    public function setSrcUris($srcUris)
    {
        return $this->withSrcUris($srcUris);
    }

    /**
     * @param string $srcUris
     *
     * @return $this
     */
    public function withSrcUris($srcUris)
    {
        $this->data['SrcUris'] = $srcUris;
        $this->options['query']['SrcUris'] = $srcUris;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }
}
