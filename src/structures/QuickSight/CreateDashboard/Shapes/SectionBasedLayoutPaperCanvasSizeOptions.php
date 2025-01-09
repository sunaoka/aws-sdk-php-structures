<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'US_LETTER'|'US_LEGAL'|'US_TABLOID_LEDGER'|'A0'|'A1'|'A2'|'A3'|'A4'|'A5'|'JIS_B4'|'JIS_B5' $PaperSize
 * @property 'PORTRAIT'|'LANDSCAPE' $PaperOrientation
 * @property Spacing $PaperMargin
 */
class SectionBasedLayoutPaperCanvasSizeOptions extends Shape
{
    /**
     * @param array{
     *     PaperSize?: 'US_LETTER'|'US_LEGAL'|'US_TABLOID_LEDGER'|'A0'|'A1'|'A2'|'A3'|'A4'|'A5'|'JIS_B4'|'JIS_B5',
     *     PaperOrientation?: 'PORTRAIT'|'LANDSCAPE',
     *     PaperMargin?: Spacing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
