<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property string $RoleARN
 * @property list<string> $SecurityGroupIds
 * @property string $VpcId
 */
class VpcConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     RoleARN: string,
     *     SecurityGroupIds: list<string>,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
