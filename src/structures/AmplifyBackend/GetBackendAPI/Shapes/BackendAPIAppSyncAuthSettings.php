<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CognitoUserPoolId
 * @property string $Description
 * @property double $ExpirationTime
 * @property string $OpenIDAuthTTL
 * @property string $OpenIDClientId
 * @property string $OpenIDIatTTL
 * @property string $OpenIDIssueURL
 * @property string $OpenIDProviderName
 */
class BackendAPIAppSyncAuthSettings extends Shape
{
    /**
     * @param array{
     *     CognitoUserPoolId?: string,
     *     Description?: string,
     *     ExpirationTime?: double,
     *     OpenIDAuthTTL?: string,
     *     OpenIDClientId?: string,
     *     OpenIDIatTTL?: string,
     *     OpenIDIssueURL?: string,
     *     OpenIDProviderName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
