<?php

namespace Sunaoka\Aws\Structures\Glacier\ListVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VaultARN
 * @property string|null $VaultName
 * @property string|null $CreationDate
 * @property string|null $LastInventoryDate
 * @property int|null $NumberOfArchives
 * @property int|null $SizeInBytes
 */
class DescribeVaultOutput extends Shape
{
    /**
     * @param array{
     *     VaultARN?: string|null,
     *     VaultName?: string|null,
     *     CreationDate?: string|null,
     *     LastInventoryDate?: string|null,
     *     NumberOfArchives?: int|null,
     *     SizeInBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
