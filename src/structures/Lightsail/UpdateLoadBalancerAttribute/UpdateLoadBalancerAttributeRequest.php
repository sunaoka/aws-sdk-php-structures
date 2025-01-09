<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateLoadBalancerAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property 'HealthCheckPath'|'SessionStickinessEnabled'|'SessionStickiness_LB_CookieDurationSeconds'|'HttpsRedirectionEnabled'|'TlsPolicyName' $attributeName
 * @property string $attributeValue
 */
class UpdateLoadBalancerAttributeRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     attributeName: 'HealthCheckPath'|'SessionStickinessEnabled'|'SessionStickiness_LB_CookieDurationSeconds'|'HttpsRedirectionEnabled'|'TlsPolicyName',
     *     attributeValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
