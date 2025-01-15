<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeMappedResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $ARN
 */
class MappedResourceConfigurationListItem extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
