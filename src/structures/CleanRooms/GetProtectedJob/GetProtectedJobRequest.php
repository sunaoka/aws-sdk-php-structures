<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $protectedJobIdentifier
 */
class GetProtectedJobRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     protectedJobIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
