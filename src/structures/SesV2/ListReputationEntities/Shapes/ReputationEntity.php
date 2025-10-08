<?php

namespace Sunaoka\Aws\Structures\SesV2\ListReputationEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReputationEntityReference
 * @property 'RESOURCE'|null $ReputationEntityType
 * @property string|null $ReputationManagementPolicy
 * @property StatusRecord|null $CustomerManagedStatus
 * @property StatusRecord|null $AwsSesManagedStatus
 * @property 'ENABLED'|'REINSTATED'|'DISABLED'|null $SendingStatusAggregate
 * @property 'LOW'|'HIGH'|null $ReputationImpact
 */
class ReputationEntity extends Shape
{
    /**
     * @param array{
     *     ReputationEntityReference?: string|null,
     *     ReputationEntityType?: 'RESOURCE'|null,
     *     ReputationManagementPolicy?: string|null,
     *     CustomerManagedStatus?: StatusRecord|null,
     *     AwsSesManagedStatus?: StatusRecord|null,
     *     SendingStatusAggregate?: 'ENABLED'|'REINSTATED'|'DISABLED'|null,
     *     ReputationImpact?: 'LOW'|'HIGH'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
