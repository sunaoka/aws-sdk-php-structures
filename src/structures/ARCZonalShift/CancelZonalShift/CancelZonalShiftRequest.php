<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CancelZonalShift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $zonalShiftId
 */
class CancelZonalShiftRequest extends Request
{
    /**
     * @param array{zonalShiftId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
