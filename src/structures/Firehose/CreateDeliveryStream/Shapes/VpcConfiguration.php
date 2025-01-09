<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property string $RoleARN
 * @property list<string> $SecurityGroupIds
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     RoleARN: string,
     *     SecurityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
