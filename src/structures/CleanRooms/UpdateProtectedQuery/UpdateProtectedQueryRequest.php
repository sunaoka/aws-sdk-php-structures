<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateProtectedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $protectedQueryIdentifier
 * @property 'CANCELLED' $targetStatus
 */
class UpdateProtectedQueryRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     protectedQueryIdentifier: string,
     *     targetStatus: 'CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
