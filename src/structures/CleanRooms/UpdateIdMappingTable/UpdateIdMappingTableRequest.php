<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdMappingTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idMappingTableIdentifier
 * @property string $membershipIdentifier
 * @property string $description
 * @property string $kmsKeyArn
 */
class UpdateIdMappingTableRequest extends Request
{
    /**
     * @param array{
     *     idMappingTableIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
