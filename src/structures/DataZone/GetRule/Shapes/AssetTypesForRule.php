<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'SPECIFIC' $selectionMode
 * @property list<string> $specificAssetTypes
 */
class AssetTypesForRule extends Shape
{
    /**
     * @param array{
     *     selectionMode: 'ALL'|'SPECIFIC',
     *     specificAssetTypes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
