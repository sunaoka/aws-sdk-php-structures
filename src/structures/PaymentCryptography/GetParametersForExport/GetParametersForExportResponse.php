<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetParametersForExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExportToken
 * @property \Aws\Api\DateTimeResult $ParametersValidUntilTimestamp
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'RSA_2048'|'RSA_3072'|'RSA_4096' $SigningKeyAlgorithm
 * @property string $SigningKeyCertificate
 * @property string $SigningKeyCertificateChain
 */
class GetParametersForExportResponse extends Response
{
}
