<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\AssociateKmsKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $kmsKeyId
 * @property string $resourceIdentifier
 */
class AssociateKmsKeyRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     kmsKeyId: string,
     *     resourceIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
