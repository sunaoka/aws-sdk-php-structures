<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tenantId
 * @property string $domain
 * @property list<string> $siteUrls
 * @property 'ONLINE' $hostType
 * @property 'OAUTH2_CLIENT_CREDENTIALS'|'OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS' $authType
 * @property string $credentialsSecretArn
 */
class SharePointSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     tenantId?: string|null,
     *     domain: string,
     *     siteUrls: list<string>,
     *     hostType: 'ONLINE',
     *     authType: 'OAUTH2_CLIENT_CREDENTIALS'|'OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS',
     *     credentialsSecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
