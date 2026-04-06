<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\AddKeyReplicationRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property list<string> $ReplicationRegions
 */
class AddKeyReplicationRegionsRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     ReplicationRegions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
