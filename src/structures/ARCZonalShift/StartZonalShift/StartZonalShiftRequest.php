<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\StartZonalShift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 * @property string $awayFrom
 * @property string $expiresIn
 * @property string $comment
 */
class StartZonalShiftRequest extends Request
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     awayFrom: string,
     *     expiresIn: string,
     *     comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
