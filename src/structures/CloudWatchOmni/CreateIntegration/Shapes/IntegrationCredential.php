<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthCodeCredential|null $oauthCodeCredential
 * @property OAuthClientCredential|null $oauthClientCredential
 * @property ApiKeyCredential|null $apiKeyCredential
 */
class IntegrationCredential extends Shape
{
    /**
     * @param array{
     *     oauthCodeCredential?: OAuthCodeCredential|null,
     *     oauthClientCredential?: OAuthClientCredential|null,
     *     apiKeyCredential?: ApiKeyCredential|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
