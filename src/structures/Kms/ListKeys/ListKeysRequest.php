<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 * @property list<'SELF'|'OTHER_ACCOUNTS_VIA_RAM'>|null $ResourceOwners
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null,
     *     ResourceOwners?: list<'SELF'|'OTHER_ACCOUNTS_VIA_RAM'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
