<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalShift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $comment
 * @property string|null $expiresIn
 * @property string $zonalShiftId
 */
class UpdateZonalShiftRequest extends Request
{
    /**
     * @param array{
     *     comment?: string|null,
     *     expiresIn?: string|null,
     *     zonalShiftId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
