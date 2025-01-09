<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\StartZonalShift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awayFrom
 * @property string $comment
 * @property string $expiresIn
 * @property string $resourceIdentifier
 */
class StartZonalShiftRequest extends Request
{
    /**
     * @param array{
     *     awayFrom: string,
     *     comment: string,
     *     expiresIn: string,
     *     resourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
