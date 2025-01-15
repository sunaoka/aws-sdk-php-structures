<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BIN_COUNT'|'BIN_WIDTH'|null $SelectedBinType
 * @property BinCountOptions|null $BinCount
 * @property BinWidthOptions|null $BinWidth
 * @property double|null $StartValue
 */
class HistogramBinOptions extends Shape
{
    /**
     * @param array{
     *     SelectedBinType?: 'BIN_COUNT'|'BIN_WIDTH'|null,
     *     BinCount?: BinCountOptions|null,
     *     BinWidth?: BinWidthOptions|null,
     *     StartValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
