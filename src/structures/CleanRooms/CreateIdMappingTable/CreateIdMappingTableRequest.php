<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIdMappingTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $name
 * @property string|null $description
 * @property Shapes\IdMappingTableInputReferenceConfig $inputReferenceConfig
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 */
class CreateIdMappingTableRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     inputReferenceConfig: Shapes\IdMappingTableInputReferenceConfig,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
