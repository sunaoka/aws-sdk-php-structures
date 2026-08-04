<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatusCheckAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationStatusCheckId
 * @property 'tag'|'instance-id'|null $AssociationType
 * @property string|null $Key
 * @property string|null $Value
 */
class ApplicationStatusCheckAssociationObject extends Shape
{
    /**
     * @param array{
     *     ApplicationStatusCheckId?: string|null,
     *     AssociationType?: 'tag'|'instance-id'|null,
     *     Key?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
