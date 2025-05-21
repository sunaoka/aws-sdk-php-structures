<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $protectedJobIdentifier
 * @property 'CANCELLED' $targetStatus
 */
class UpdateProtectedJobRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     protectedJobIdentifier: string,
     *     targetStatus: 'CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
