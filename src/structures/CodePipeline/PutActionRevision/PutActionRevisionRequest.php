<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutActionRevision;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property string $actionName
 * @property Shapes\ActionRevision $actionRevision
 */
class PutActionRevisionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     actionName: string,
     *     actionRevision: Shapes\ActionRevision
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
