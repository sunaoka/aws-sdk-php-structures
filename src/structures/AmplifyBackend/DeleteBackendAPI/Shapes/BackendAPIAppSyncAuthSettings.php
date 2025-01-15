<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\DeleteBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CognitoUserPoolId
 * @property string|null $Description
 * @property double|null $ExpirationTime
 * @property string|null $OpenIDAuthTTL
 * @property string|null $OpenIDClientId
 * @property string|null $OpenIDIatTTL
 * @property string|null $OpenIDIssueURL
 * @property string|null $OpenIDProviderName
 */
class BackendAPIAppSyncAuthSettings extends Shape
{
    /**
     * @param array{
     *     CognitoUserPoolId?: string|null,
     *     Description?: string|null,
     *     ExpirationTime?: double|null,
     *     OpenIDAuthTTL?: string|null,
     *     OpenIDClientId?: string|null,
     *     OpenIDIatTTL?: string|null,
     *     OpenIDIssueURL?: string|null,
     *     OpenIDProviderName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
