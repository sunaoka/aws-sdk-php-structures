<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $protectedQueryIdentifier
 */
class GetProtectedQueryRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     protectedQueryIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
