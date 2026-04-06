<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH2_CLIENT_CREDENTIALS'|'OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS' $authType
 * @property string $credentialsSecretArn
 * @property string $domain
 * @property 'ONLINE' $hostType
 * @property list<string> $siteUrls
 * @property string|null $tenantId
 */
class SharePointSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     authType: 'OAUTH2_CLIENT_CREDENTIALS'|'OAUTH2_SHAREPOINT_APP_ONLY_CLIENT_CREDENTIALS',
     *     credentialsSecretArn: string,
     *     domain: string,
     *     hostType: 'ONLINE',
     *     siteUrls: list<string>,
     *     tenantId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
