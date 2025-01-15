<?php

namespace Sunaoka\Aws\Structures\Ssm\PutInventory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 * @property string $SchemaVersion
 * @property string $CaptureTime
 * @property string|null $ContentHash
 * @property list<array<string, string>>|null $Content
 * @property array<string, string>|null $Context
 */
class InventoryItem extends Shape
{
    /**
     * @param array{
     *     TypeName: string,
     *     SchemaVersion: string,
     *     CaptureTime: string,
     *     ContentHash?: string|null,
     *     Content?: list<array<string, string>>|null,
     *     Context?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
