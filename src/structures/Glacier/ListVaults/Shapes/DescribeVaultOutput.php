<?php

namespace Sunaoka\Aws\Structures\Glacier\ListVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VaultARN
 * @property string $VaultName
 * @property string $CreationDate
 * @property string $LastInventoryDate
 * @property int $NumberOfArchives
 * @property int $SizeInBytes
 */
class DescribeVaultOutput extends Shape
{
    /**
     * @param array{
     *     VaultARN?: string,
     *     VaultName?: string,
     *     CreationDate?: string,
     *     LastInventoryDate?: string,
     *     NumberOfArchives?: int,
     *     SizeInBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
