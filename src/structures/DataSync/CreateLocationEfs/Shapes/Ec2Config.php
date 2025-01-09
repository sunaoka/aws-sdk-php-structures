<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationEfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetArn
 * @property list<string> $SecurityGroupArns
 */
class Ec2Config extends Shape
{
    /**
     * @param array{
     *     SubnetArn: string,
     *     SecurityGroupArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
