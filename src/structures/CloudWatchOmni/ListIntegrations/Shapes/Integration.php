<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string|null $integrationArn
 * @property 'AWS_CONFIG_SLREC'|'SLACK'|'EXTERNAL_AGENT'|'AWS_INTEGRATION' $integrationType
 * @property string $name
 * @property 'ACTIVE'|'DELETED'|'PENDING'|'PENDING_OAUTH'|'ERROR'|'FAILED' $status
 * @property 'NONE'|'OAUTH2'|'API_KEY'|null $authType
 * @property string|null $credentialArn
 * @property string|null $roleArn
 * @property array<string, string>|null $integrationAttributes
 * @property string|null $authorizationUrl
 * @property string|null $errorMessage
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property 'ACCOUNT'|'ORGANIZATION'|null $scope
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     integrationArn?: string|null,
     *     integrationType: 'AWS_CONFIG_SLREC'|'SLACK'|'EXTERNAL_AGENT'|'AWS_INTEGRATION',
     *     name: string,
     *     status: 'ACTIVE'|'DELETED'|'PENDING'|'PENDING_OAUTH'|'ERROR'|'FAILED',
     *     authType?: 'NONE'|'OAUTH2'|'API_KEY'|null,
     *     credentialArn?: string|null,
     *     roleArn?: string|null,
     *     integrationAttributes?: array<string, string>|null,
     *     authorizationUrl?: string|null,
     *     errorMessage?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     scope?: 'ACCOUNT'|'ORGANIZATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
