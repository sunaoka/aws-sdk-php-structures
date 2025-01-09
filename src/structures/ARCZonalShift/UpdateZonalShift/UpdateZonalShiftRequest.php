<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalShift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $comment
 * @property string $expiresIn
 * @property string $zonalShiftId
 */
class UpdateZonalShiftRequest extends Request
{
    /**
     * @param array{
     *     comment?: string,
     *     expiresIn?: string,
     *     zonalShiftId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
