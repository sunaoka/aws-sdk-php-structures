<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicyPrincipals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $marker
 * @property int $pageSize
 * @property bool $ascendingOrder
 */
class ListPolicyPrincipalsRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     marker?: string,
     *     pageSize?: int,
     *     ascendingOrder?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
