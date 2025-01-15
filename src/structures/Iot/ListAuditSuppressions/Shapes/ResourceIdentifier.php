<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceCertificateId
 * @property string|null $caCertificateId
 * @property string|null $cognitoIdentityPoolId
 * @property string|null $clientId
 * @property PolicyVersionIdentifier|null $policyVersionIdentifier
 * @property string|null $account
 * @property string|null $iamRoleArn
 * @property string|null $roleAliasArn
 * @property IssuerCertificateIdentifier|null $issuerCertificateIdentifier
 * @property string|null $deviceCertificateArn
 */
class ResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     deviceCertificateId?: string|null,
     *     caCertificateId?: string|null,
     *     cognitoIdentityPoolId?: string|null,
     *     clientId?: string|null,
     *     policyVersionIdentifier?: PolicyVersionIdentifier|null,
     *     account?: string|null,
     *     iamRoleArn?: string|null,
     *     roleAliasArn?: string|null,
     *     issuerCertificateIdentifier?: IssuerCertificateIdentifier|null,
     *     deviceCertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
