<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteIntermediateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $intermediateTableIdentifier
 */
class DeleteIntermediateTableRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     intermediateTableIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
