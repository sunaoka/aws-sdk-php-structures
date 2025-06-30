<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\UpdateZonalShift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $zonalShiftId
 * @property string|null $comment
 * @property string|null $expiresIn
 */
class UpdateZonalShiftRequest extends Request
{
    /**
     * @param array{
     *     zonalShiftId: string,
     *     comment?: string|null,
     *     expiresIn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
