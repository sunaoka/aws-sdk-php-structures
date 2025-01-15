<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupConfigurationItem>|null $Configuration
 * @property list<GroupConfigurationItem>|null $ProposedConfiguration
 * @property 'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null $Status
 * @property string|null $FailureReason
 */
class GroupConfiguration extends Shape
{
    /**
     * @param array{
     *     Configuration?: list<GroupConfigurationItem>|null,
     *     ProposedConfiguration?: list<GroupConfigurationItem>|null,
     *     Status?: 'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
