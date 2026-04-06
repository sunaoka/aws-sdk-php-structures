<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListWebsiteAuthorizationProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AuthorizationProviderId
 * @property 'SAML' $AuthorizationProviderType
 * @property string|null $DomainName
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class WebsiteAuthorizationProviderSummary extends Shape
{
    /**
     * @param array{
     *     AuthorizationProviderId?: string|null,
     *     AuthorizationProviderType: 'SAML',
     *     DomainName?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
