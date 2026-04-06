<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DisableDefaultKeyReplicationRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ReplicationRegions
 */
class DisableDefaultKeyReplicationRegionsRequest extends Request
{
    /**
     * @param array{ReplicationRegions: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
