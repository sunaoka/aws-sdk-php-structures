<?php

namespace Sunaoka\Aws\Structures\Waf\ListRateBasedRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextMarker
 * @property int $Limit
 */
class ListRateBasedRulesRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
