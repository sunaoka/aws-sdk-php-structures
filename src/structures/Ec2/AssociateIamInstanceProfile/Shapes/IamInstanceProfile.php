<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIamInstanceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 */
class IamInstanceProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
