<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DisassociateKmsKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property string $resourceIdentifier
 */
class DisassociateKmsKeyRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     resourceIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
