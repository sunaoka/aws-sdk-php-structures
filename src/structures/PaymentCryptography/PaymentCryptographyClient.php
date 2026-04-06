<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography;

class PaymentCryptographyClient extends \Aws\PaymentCryptography\PaymentCryptographyClient
{
    use CreateAlias\CreateAliasTrait;
    use CreateKey\CreateKeyTrait;
    use DeleteAlias\DeleteAliasTrait;
    use DeleteKey\DeleteKeyTrait;
    use ExportKey\ExportKeyTrait;
    use GetAlias\GetAliasTrait;
    use GetKey\GetKeyTrait;
    use GetParametersForExport\GetParametersForExportTrait;
    use GetParametersForImport\GetParametersForImportTrait;
    use GetPublicKeyCertificate\GetPublicKeyCertificateTrait;
    use ImportKey\ImportKeyTrait;
    use ListAliases\ListAliasesTrait;
    use ListKeys\ListKeysTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RestoreKey\RestoreKeyTrait;
    use StartKeyUsage\StartKeyUsageTrait;
    use StopKeyUsage\StopKeyUsageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAlias\UpdateAliasTrait;
}
