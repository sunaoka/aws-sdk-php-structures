<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string> $securityGroups
 * @property string $vpcId
 * @property string $roleArn
 */
class VpcDestinationProperties extends Shape
{
    /**
     * @param array{
     *     subnetIds?: list<string>,
     *     securityGroups?: list<string>,
     *     vpcId?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
