<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ephemerisId
 */
class DescribeEphemerisRequest extends Request
{
    /**
     * @param array{ephemerisId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
