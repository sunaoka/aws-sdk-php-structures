<?php

namespace Sunaoka\Aws\Structures\Route53\CreateKeySigningKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $KmsArn
 * @property int $Flag
 * @property string $SigningAlgorithmMnemonic
 * @property int $SigningAlgorithmType
 * @property string $DigestAlgorithmMnemonic
 * @property int $DigestAlgorithmType
 * @property int $KeyTag
 * @property string $DigestValue
 * @property string $PublicKey
 * @property string $DSRecord
 * @property string $DNSKEYRecord
 * @property string $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class KeySigningKey extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     KmsArn?: string,
     *     Flag?: int,
     *     SigningAlgorithmMnemonic?: string,
     *     SigningAlgorithmType?: int,
     *     DigestAlgorithmMnemonic?: string,
     *     DigestAlgorithmType?: int,
     *     KeyTag?: int,
     *     DigestValue?: string,
     *     PublicKey?: string,
     *     DSRecord?: string,
     *     DNSKEYRecord?: string,
     *     Status?: string,
     *     StatusMessage?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
