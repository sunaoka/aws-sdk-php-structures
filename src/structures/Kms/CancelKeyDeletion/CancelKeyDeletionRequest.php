<?php

namespace Sunaoka\Aws\Structures\Kms\CancelKeyDeletion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 */
class CancelKeyDeletionRequest extends Request
{
    /**
     * @param array{KeyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
