<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 * @property string|null $connectionName
 * @property string|null $encryptionMode
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     connectionId: string,
     *     connectionName?: string|null,
     *     encryptionMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
