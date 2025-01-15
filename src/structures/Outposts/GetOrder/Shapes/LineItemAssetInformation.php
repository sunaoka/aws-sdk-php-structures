<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssetId
 * @property list<string>|null $MacAddressList
 */
class LineItemAssetInformation extends Shape
{
    /**
     * @param array{
     *     AssetId?: string|null,
     *     MacAddressList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
