<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMappedResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $ARN
 */
class MappedResourceConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
