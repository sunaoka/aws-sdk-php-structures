<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int $Limit
 * @property string $Marker
 */
class ListKeyPoliciesRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
