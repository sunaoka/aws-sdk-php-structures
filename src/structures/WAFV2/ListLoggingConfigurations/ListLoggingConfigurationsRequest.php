<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $NextMarker
 * @property int $Limit
 * @property 'CUSTOMER'|'SECURITY_LAKE' $LogScope
 */
class ListLoggingConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     NextMarker?: string,
     *     Limit?: int,
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
