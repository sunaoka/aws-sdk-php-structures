<?php

namespace Sunaoka\Aws\Structures\Redshift\RotateEncryptionKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class RotateEncryptionKeyRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
