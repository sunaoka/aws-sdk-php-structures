<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 */
class ListKeyPoliciesRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
