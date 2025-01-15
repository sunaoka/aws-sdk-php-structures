<?php

namespace Sunaoka\Aws\Structures\Route53\CreateKeySigningKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $KmsArn
 * @property int|null $Flag
 * @property string|null $SigningAlgorithmMnemonic
 * @property int|null $SigningAlgorithmType
 * @property string|null $DigestAlgorithmMnemonic
 * @property int|null $DigestAlgorithmType
 * @property int<0, 65536>|null $KeyTag
 * @property string|null $DigestValue
 * @property string|null $PublicKey
 * @property string|null $DSRecord
 * @property string|null $DNSKEYRecord
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class KeySigningKey extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     KmsArn?: string|null,
     *     Flag?: int|null,
     *     SigningAlgorithmMnemonic?: string|null,
     *     SigningAlgorithmType?: int|null,
     *     DigestAlgorithmMnemonic?: string|null,
     *     DigestAlgorithmType?: int|null,
     *     KeyTag?: int<0, 65536>|null,
     *     DigestValue?: string|null,
     *     PublicKey?: string|null,
     *     DSRecord?: string|null,
     *     DNSKEYRecord?: string|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
