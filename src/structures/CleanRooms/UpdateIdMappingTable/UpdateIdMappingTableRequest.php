<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdMappingTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $idMappingTableIdentifier
 * @property string $membershipIdentifier
 * @property string|null $description
 * @property string|null $kmsKeyArn
 */
class UpdateIdMappingTableRequest extends Request
{
    /**
     * @param array{
     *     idMappingTableIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
