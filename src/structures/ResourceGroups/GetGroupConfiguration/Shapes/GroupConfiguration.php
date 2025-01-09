<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GroupConfigurationItem> $Configuration
 * @property list<GroupConfigurationItem> $ProposedConfiguration
 * @property 'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED' $Status
 * @property string $FailureReason
 */
class GroupConfiguration extends Shape
{
    /**
     * @param array{
     *     Configuration?: list<GroupConfigurationItem>,
     *     ProposedConfiguration?: list<GroupConfigurationItem>,
     *     Status?: 'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
