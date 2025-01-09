<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string $SchemaVersion
 * @property string $CaptureTime
 * @property string $ContentHash
 * @property list<array<string, string>> $Content
 */
class InventoryResultItem extends Shape
{
    /**
     * @param array{
     *     TypeName: string,
     *     SchemaVersion: string,
     *     CaptureTime?: string,
     *     ContentHash?: string,
     *     Content: list<array<string, string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
