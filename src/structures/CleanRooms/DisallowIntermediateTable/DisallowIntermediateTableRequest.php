<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DisallowIntermediateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $intermediateTableName
 * @property bool|null $includeDescendants
 */
class DisallowIntermediateTableRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     intermediateTableName: string,
     *     includeDescendants?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
