<?php

namespace Sunaoka\Aws\Structures\Interconnect\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $clientToken
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
