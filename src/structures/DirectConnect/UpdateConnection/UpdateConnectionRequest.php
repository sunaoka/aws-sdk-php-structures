<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string $connectionName
 * @property string $encryptionMode
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     connectionName?: string,
     *     encryptionMode?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
