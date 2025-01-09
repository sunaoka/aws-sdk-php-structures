<?php

namespace Sunaoka\Aws\Structures\Route53\GetReusableDelegationSetLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MAX_ZONES_BY_REUSABLE_DELEGATION_SET' $Type
 * @property string $DelegationSetId
 */
class GetReusableDelegationSetLimitRequest extends Request
{
    /**
     * @param array{
     *     Type: 'MAX_ZONES_BY_REUSABLE_DELEGATION_SET',
     *     DelegationSetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
