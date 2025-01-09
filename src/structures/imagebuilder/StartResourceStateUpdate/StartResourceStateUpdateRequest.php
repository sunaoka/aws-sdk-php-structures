<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property Shapes\ResourceState $state
 * @property string $executionRole
 * @property Shapes\ResourceStateUpdateIncludeResources $includeResources
 * @property Shapes\ResourceStateUpdateExclusionRules $exclusionRules
 * @property \Aws\Api\DateTimeResult $updateAt
 * @property string $clientToken
 */
class StartResourceStateUpdateRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     state: Shapes\ResourceState,
     *     executionRole?: string,
     *     includeResources?: Shapes\ResourceStateUpdateIncludeResources,
     *     exclusionRules?: Shapes\ResourceStateUpdateExclusionRules,
     *     updateAt?: \Aws\Api\DateTimeResult,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
