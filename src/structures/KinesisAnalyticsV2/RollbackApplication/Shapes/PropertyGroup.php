<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PropertyGroupId
 * @property array<string, string> $PropertyMap
 */
class PropertyGroup extends Shape
{
    /**
     * @param array{
     *     PropertyGroupId: string,
     *     PropertyMap: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
