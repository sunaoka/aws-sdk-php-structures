<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEVICE_CERTIFICATE'|'CA_CERTIFICATE'|'IOT_POLICY'|'COGNITO_IDENTITY_POOL'|'CLIENT_ID'|'ACCOUNT_SETTINGS'|'ROLE_ALIAS'|'IAM_ROLE'|'ISSUER_CERTIFICATE' $resourceType
 * @property ResourceIdentifier $resourceIdentifier
 * @property array<string, string> $additionalInfo
 */
class NonCompliantResource extends Shape
{
    /**
     * @param array{
     *     resourceType?: 'DEVICE_CERTIFICATE'|'CA_CERTIFICATE'|'IOT_POLICY'|'COGNITO_IDENTITY_POOL'|'CLIENT_ID'|'ACCOUNT_SETTINGS'|'ROLE_ALIAS'|'IAM_ROLE'|'ISSUER_CERTIFICATE',
     *     resourceIdentifier?: ResourceIdentifier,
     *     additionalInfo?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
