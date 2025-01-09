<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property list<string> $MacAddressList
 */
class LineItemAssetInformation extends Shape
{
    /**
     * @param array{
     *     AssetId?: string,
     *     MacAddressList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
