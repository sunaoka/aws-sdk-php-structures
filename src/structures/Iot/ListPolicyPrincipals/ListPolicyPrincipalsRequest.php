<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicyPrincipals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string|null $marker
 * @property int<1, 250>|null $pageSize
 * @property bool|null $ascendingOrder
 */
class ListPolicyPrincipalsRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     marker?: string|null,
     *     pageSize?: int<1, 250>|null,
     *     ascendingOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
