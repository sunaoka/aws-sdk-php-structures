<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DisassociateConnectionsFromResiliencyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $connectionIdentifiers
 * @property string $resiliencyGroupId
 * @property string|null $clientToken
 */
class DisassociateConnectionsFromResiliencyGroupRequest extends Request
{
    /**
     * @param array{
     *     connectionIdentifiers: list<string>,
     *     resiliencyGroupId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
