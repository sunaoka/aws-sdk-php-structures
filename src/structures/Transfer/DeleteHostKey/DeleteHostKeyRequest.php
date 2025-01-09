<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteHostKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $HostKeyId
 */
class DeleteHostKeyRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     HostKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
