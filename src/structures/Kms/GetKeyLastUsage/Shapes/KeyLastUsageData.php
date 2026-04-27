<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyLastUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Decrypt'|'DeriveSharedSecret'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateDataKeyWithoutPlaintext'|'GenerateMac'|'ReEncrypt'|'Sign'|'Verify'|'VerifyMac'|null $Operation
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $CloudTrailEventId
 * @property string|null $KmsRequestId
 */
class KeyLastUsageData extends Shape
{
    /**
     * @param array{
     *     Operation?: 'Decrypt'|'DeriveSharedSecret'|'Encrypt'|'GenerateDataKey'|'GenerateDataKeyPair'|'GenerateDataKeyPairWithoutPlaintext'|'GenerateDataKeyWithoutPlaintext'|'GenerateMac'|'ReEncrypt'|'Sign'|'Verify'|'VerifyMac'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     CloudTrailEventId?: string|null,
     *     KmsRequestId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
