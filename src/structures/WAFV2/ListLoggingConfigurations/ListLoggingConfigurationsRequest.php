<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string|null $NextMarker
 * @property int<1, 100>|null $Limit
 * @property 'CUSTOMER'|'SECURITY_LAKE'|null $LogScope
 */
class ListLoggingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     NextMarker?: string|null,
     *     Limit?: int<1, 100>|null,
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
