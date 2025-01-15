<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartResourceStateUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property Shapes\ResourceState $state
 * @property string|null $executionRole
 * @property Shapes\ResourceStateUpdateIncludeResources|null $includeResources
 * @property Shapes\ResourceStateUpdateExclusionRules|null $exclusionRules
 * @property \Aws\Api\DateTimeResult|null $updateAt
 * @property string $clientToken
 */
class StartResourceStateUpdateRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     state: Shapes\ResourceState,
     *     executionRole?: string|null,
     *     includeResources?: Shapes\ResourceStateUpdateIncludeResources|null,
     *     exclusionRules?: Shapes\ResourceStateUpdateExclusionRules|null,
     *     updateAt?: \Aws\Api\DateTimeResult|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
