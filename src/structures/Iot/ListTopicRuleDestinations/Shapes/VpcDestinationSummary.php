<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRuleDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroups
 * @property string|null $vpcId
 * @property string|null $roleArn
 */
class VpcDestinationSummary extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>|null,
     *     securityGroups?: list<string>|null,
     *     vpcId?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
