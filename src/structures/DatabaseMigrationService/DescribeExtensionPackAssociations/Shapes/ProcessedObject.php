<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeExtensionPackAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Type
 * @property string|null $EndpointType
 */
class ProcessedObject extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: string|null,
     *     EndpointType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
