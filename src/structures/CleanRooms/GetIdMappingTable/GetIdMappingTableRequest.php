<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIdMappingTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idMappingTableIdentifier
 * @property string $membershipIdentifier
 */
class GetIdMappingTableRequest extends Request
{
    /**
     * @param array{
     *     idMappingTableIdentifier: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
