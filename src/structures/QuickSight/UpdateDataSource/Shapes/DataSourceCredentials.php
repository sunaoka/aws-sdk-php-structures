<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CredentialPair|null $CredentialPair
 * @property string|null $CopySourceArn
 * @property string|null $SecretArn
 * @property KeyPairCredentials|null $KeyPairCredentials
 * @property WebProxyCredentials|null $WebProxyCredentials
 * @property OAuthClientCredentials|null $OAuthClientCredentials
 * @property ServiceAccountCredentials|null $ServiceAccountCredentials
 * @property SharePointClientCredentials|null $SharePointClientCredentials
 * @property OneDriveClientCredentials|null $OneDriveClientCredentials
 */
class DataSourceCredentials extends Shape
{
    /**
     * @param array{
     *     CredentialPair?: CredentialPair|null,
     *     CopySourceArn?: string|null,
     *     SecretArn?: string|null,
     *     KeyPairCredentials?: KeyPairCredentials|null,
     *     WebProxyCredentials?: WebProxyCredentials|null,
     *     OAuthClientCredentials?: OAuthClientCredentials|null,
     *     ServiceAccountCredentials?: ServiceAccountCredentials|null,
     *     SharePointClientCredentials?: SharePointClientCredentials|null,
     *     OneDriveClientCredentials?: OneDriveClientCredentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
