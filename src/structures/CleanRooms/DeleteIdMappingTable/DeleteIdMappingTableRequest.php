<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIdMappingTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idMappingTableIdentifier
 * @property string $membershipIdentifier
 */
class DeleteIdMappingTableRequest extends Request
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
