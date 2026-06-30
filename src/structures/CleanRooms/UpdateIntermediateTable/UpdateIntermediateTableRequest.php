<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $intermediateTableIdentifier
 * @property string $membershipIdentifier
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property list<Shapes\IntermediateTableColumn>|null $columns
 */
class UpdateIntermediateTableRequest extends Request
{
    /**
     * @param array{
     *     intermediateTableIdentifier: string,
     *     membershipIdentifier: string,
     *     description?: string|null,
     *     kmsKeyArn?: string|null,
     *     columns?: list<Shapes\IntermediateTableColumn>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
