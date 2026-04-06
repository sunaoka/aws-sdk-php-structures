<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetParametersForExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SigningKeyCertificate
 * @property string $SigningKeyCertificateChain
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521' $SigningKeyAlgorithm
 * @property string $ExportToken
 * @property \Aws\Api\DateTimeResult $ParametersValidUntilTimestamp
 */
class GetParametersForExportResponse extends Response
{
}
