<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListManagedRuleSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string|null $NextMarker
 * @property int<1, 100>|null $Limit
 */
class ListManagedRuleSetsRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     NextMarker?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
