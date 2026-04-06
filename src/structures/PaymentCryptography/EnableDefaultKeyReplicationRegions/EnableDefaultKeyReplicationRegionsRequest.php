<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\EnableDefaultKeyReplicationRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ReplicationRegions
 */
class EnableDefaultKeyReplicationRegionsRequest extends Request
{
    /**
     * @param array{ReplicationRegions: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
