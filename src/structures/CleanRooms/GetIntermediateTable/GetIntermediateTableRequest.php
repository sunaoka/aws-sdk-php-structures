<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $intermediateTableIdentifier
 * @property string $membershipIdentifier
 */
class GetIntermediateTableRequest extends Request
{
    /**
     * @param array{
     *     intermediateTableIdentifier: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
