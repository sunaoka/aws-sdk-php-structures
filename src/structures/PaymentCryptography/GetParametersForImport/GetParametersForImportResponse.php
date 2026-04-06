<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetParametersForImport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ImportToken
 * @property \Aws\Api\DateTimeResult $ParametersValidUntilTimestamp
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'RSA_2048'|'RSA_3072'|'RSA_4096' $WrappingKeyAlgorithm
 * @property string $WrappingKeyCertificate
 * @property string $WrappingKeyCertificateChain
 */
class GetParametersForImportResponse extends Response
{
}
