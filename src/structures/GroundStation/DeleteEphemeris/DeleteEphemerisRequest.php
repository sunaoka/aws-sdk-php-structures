<?php

namespace Sunaoka\Aws\Structures\GroundStation\DeleteEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ephemerisId
 */
class DeleteEphemerisRequest extends Request
{
    /**
     * @param array{ephemerisId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
