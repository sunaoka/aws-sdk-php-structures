<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string>|null $securityGroups
 * @property string $vpcId
 * @property string $roleArn
 */
class VpcDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     subnetIds: list<string>,
     *     securityGroups?: list<string>|null,
     *     vpcId: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
