<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutApprovalResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property string $actionName
 * @property Shapes\ApprovalResult $result
 * @property string $token
 */
class PutApprovalResultRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     actionName: string,
     *     result: Shapes\ApprovalResult,
     *     token: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
