<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeApplicationFleetAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetName
 * @property string $ApplicationArn
 */
class ApplicationFleetAssociation extends Shape
{
    /**
     * @param array{
     *     FleetName: string,
     *     ApplicationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
