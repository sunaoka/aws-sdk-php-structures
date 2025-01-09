<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditSuppression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceCertificateId
 * @property string $caCertificateId
 * @property string $cognitoIdentityPoolId
 * @property string $clientId
 * @property PolicyVersionIdentifier $policyVersionIdentifier
 * @property string $account
 * @property string $iamRoleArn
 * @property string $roleAliasArn
 * @property IssuerCertificateIdentifier $issuerCertificateIdentifier
 * @property string $deviceCertificateArn
 */
class ResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     deviceCertificateId?: string,
     *     caCertificateId?: string,
     *     cognitoIdentityPoolId?: string,
     *     clientId?: string,
     *     policyVersionIdentifier?: PolicyVersionIdentifier,
     *     account?: string,
     *     iamRoleArn?: string,
     *     roleAliasArn?: string,
     *     issuerCertificateIdentifier?: IssuerCertificateIdentifier,
     *     deviceCertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
