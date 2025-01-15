<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\AssociateKmsKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property string $kmsKeyId
 * @property string|null $resourceIdentifier
 */
class AssociateKmsKeyRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     kmsKeyId: string,
     *     resourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
