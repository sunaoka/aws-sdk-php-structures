<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegmentConstructs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecurityGroupConfiguration|null $securityGroup
 * @property SecurityGroupRuleConfiguration|null $securityGroupRule
 */
class OperationConfigurationUnion extends Shape
{
    /**
     * @param array{
     *     securityGroup?: SecurityGroupConfiguration|null,
     *     securityGroupRule?: SecurityGroupRuleConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
