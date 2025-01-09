<?php

namespace Sunaoka\Aws\Structures\Waf\GetRateBasedRuleManagedKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuleId
 * @property string $NextMarker
 */
class GetRateBasedRuleManagedKeysRequest extends Request
{
    /**
     * @param array{
     *     RuleId: string,
     *     NextMarker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
