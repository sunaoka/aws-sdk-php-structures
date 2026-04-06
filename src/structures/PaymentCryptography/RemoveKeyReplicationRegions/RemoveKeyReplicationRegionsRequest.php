<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\RemoveKeyReplicationRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property list<string> $ReplicationRegions
 */
class RemoveKeyReplicationRegionsRequest extends Request
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
