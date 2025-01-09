<?php

namespace Sunaoka\Aws\Structures\Organizations\MoveAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $SourceParentId
 * @property string $DestinationParentId
 */
class MoveAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     SourceParentId: string,
     *     DestinationParentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
