<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdMappingTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string $description
 * @property Shapes\IdMappingTableInputReferenceConfig $inputReferenceConfig
 * @property array<string, string> $tags
 * @property string $kmsKeyArn
 */
class CreateIdMappingTableRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     description?: string,
     *     inputReferenceConfig: Shapes\IdMappingTableInputReferenceConfig,
     *     tags?: array<string, string>,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
