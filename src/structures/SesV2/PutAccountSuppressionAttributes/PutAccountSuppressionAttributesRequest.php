<?php

namespace Sunaoka\Aws\Structures\SesV2\PutAccountSuppressionAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 */
class PutAccountSuppressionAttributesRequest extends Request
{
    /**
     * @param array{SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
