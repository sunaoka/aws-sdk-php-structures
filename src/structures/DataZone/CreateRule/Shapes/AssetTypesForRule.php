<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'SPECIFIC' $selectionMode
 * @property list<string>|null $specificAssetTypes
 */
class AssetTypesForRule extends Shape
{
    /**
     * @param array{
     *     selectionMode: 'ALL'|'SPECIFIC',
     *     specificAssetTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
