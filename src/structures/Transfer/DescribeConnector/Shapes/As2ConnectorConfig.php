<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalProfileId
 * @property string|null $PartnerProfileId
 * @property string|null $MessageSubject
 * @property 'ZLIB'|'DISABLED'|null $Compression
 * @property 'AES128_CBC'|'AES192_CBC'|'AES256_CBC'|'DES_EDE3_CBC'|'NONE'|null $EncryptionAlgorithm
 * @property 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE'|null $SigningAlgorithm
 * @property 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE'|'DEFAULT'|null $MdnSigningAlgorithm
 * @property 'SYNC'|'NONE'|null $MdnResponse
 * @property string|null $BasicAuthSecretId
 * @property 'ENABLED'|'DISABLED'|null $PreserveContentType
 */
class As2ConnectorConfig extends Shape
{
    /**
     * @param array{
     *     LocalProfileId?: string|null,
     *     PartnerProfileId?: string|null,
     *     MessageSubject?: string|null,
     *     Compression?: 'ZLIB'|'DISABLED'|null,
     *     EncryptionAlgorithm?: 'AES128_CBC'|'AES192_CBC'|'AES256_CBC'|'DES_EDE3_CBC'|'NONE'|null,
     *     SigningAlgorithm?: 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE'|null,
     *     MdnSigningAlgorithm?: 'SHA256'|'SHA384'|'SHA512'|'SHA1'|'NONE'|'DEFAULT'|null,
     *     MdnResponse?: 'SYNC'|'NONE'|null,
     *     BasicAuthSecretId?: string|null,
     *     PreserveContentType?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
