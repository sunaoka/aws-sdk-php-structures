<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateHostKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $HostKeyId
 * @property string $Description
 */
class UpdateHostKeyRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     HostKeyId: string,
     *     Description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
