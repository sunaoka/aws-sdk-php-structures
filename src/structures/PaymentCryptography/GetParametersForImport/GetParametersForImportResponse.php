<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetParametersForImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WrappingKeyCertificate
 * @property string $WrappingKeyCertificateChain
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521' $WrappingKeyAlgorithm
 * @property string $ImportToken
 * @property \Aws\Api\DateTimeResult $ParametersValidUntilTimestamp
 */
class GetParametersForImportResponse extends Response
{
}
