<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalProfileId
 * @property string $PartnerProfileId
 * @property string $MessageSubject
 * @property 'ZLIB'|'DISABLED' $Compression
 * @property 'AES128_CBC'|'AES192_CBC'|'AES256_CBC'|'DES_EDE3_CBC'|'NONE' $EncryptionAlgorithm
 * @property 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE' $SigningAlgorithm
 * @property 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE'|'DEFAULT' $MdnSigningAlgorithm
 * @property 'SYNC'|'NONE' $MdnResponse
 * @property string $BasicAuthSecretId
 * @property 'ENABLED'|'DISABLED' $PreserveContentType
 */
class As2ConnectorConfig extends Shape
{
    /**
     * @param array{
     *     LocalProfileId?: string,
     *     PartnerProfileId?: string,
     *     MessageSubject?: string,
     *     Compression?: 'ZLIB'|'DISABLED',
     *     EncryptionAlgorithm?: 'AES128_CBC'|'AES192_CBC'|'AES256_CBC'|'DES_EDE3_CBC'|'NONE',
     *     SigningAlgorithm?: 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE',
     *     MdnSigningAlgorithm?: 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE'|'DEFAULT',
     *     MdnResponse?: 'SYNC'|'NONE',
     *     BasicAuthSecretId?: string,
     *     PreserveContentType?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
