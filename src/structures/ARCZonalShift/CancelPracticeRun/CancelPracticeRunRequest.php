<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\CancelPracticeRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $zonalShiftId
 */
class CancelPracticeRunRequest extends Request
{
    /**
     * @param array{zonalShiftId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
