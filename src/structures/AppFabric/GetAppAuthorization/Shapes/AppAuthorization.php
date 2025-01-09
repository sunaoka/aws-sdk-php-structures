<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetAppAuthorization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appAuthorizationArn
 * @property string $appBundleArn
 * @property string $app
 * @property Tenant $tenant
 * @property 'oauth2'|'apiKey' $authType
 * @property 'PendingConnect'|'Connected'|'ConnectionValidationFailed'|'TokenAutoRotationFailed' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'admin'|'endUser' $persona
 * @property string $authUrl
 */
class AppAuthorization extends Shape
{
    /**
     * @param array{
     *     appAuthorizationArn: string,
     *     appBundleArn: string,
     *     app: string,
     *     tenant: Tenant,
     *     authType: 'oauth2'|'apiKey',
     *     status: 'PendingConnect'|'Connected'|'ConnectionValidationFailed'|'TokenAutoRotationFailed',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     persona?: 'admin'|'endUser',
     *     authUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
