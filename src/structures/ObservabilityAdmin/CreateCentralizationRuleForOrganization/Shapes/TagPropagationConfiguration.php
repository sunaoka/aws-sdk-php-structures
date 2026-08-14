<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationRoleArn
 * @property 'IN_SYNC'|'ADD_ONLY'|'UPDATE_SYNC'|null $TagConflictResolutionStrategy
 */
class TagPropagationConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationRoleArn: string,
     *     TagConflictResolutionStrategy?: 'IN_SYNC'|'ADD_ONLY'|'UPDATE_SYNC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
