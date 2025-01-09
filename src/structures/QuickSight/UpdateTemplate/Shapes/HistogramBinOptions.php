<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BIN_COUNT'|'BIN_WIDTH' $SelectedBinType
 * @property BinCountOptions $BinCount
 * @property BinWidthOptions $BinWidth
 * @property double $StartValue
 */
class HistogramBinOptions extends Shape
{
    /**
     * @param array{
     *     SelectedBinType?: 'BIN_COUNT'|'BIN_WIDTH',
     *     BinCount?: BinCountOptions,
     *     BinWidth?: BinWidthOptions,
     *     StartValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
