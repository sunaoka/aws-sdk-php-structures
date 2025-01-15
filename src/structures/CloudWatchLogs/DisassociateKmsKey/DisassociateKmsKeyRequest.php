<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DisassociateKmsKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property string|null $resourceIdentifier
 */
class DisassociateKmsKeyRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     resourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
