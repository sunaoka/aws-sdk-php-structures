<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography;

class PaymentCryptographyClient extends \Aws\PaymentCryptography\PaymentCryptographyClient
{
    use AddKeyReplicationRegions\AddKeyReplicationRegionsTrait;
    use AssociateMpaTeam\AssociateMpaTeamTrait;
    use CreateAlias\CreateAliasTrait;
    use CreateKey\CreateKeyTrait;
    use DeleteAlias\DeleteAliasTrait;
    use DeleteKey\DeleteKeyTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DisableDefaultKeyReplicationRegions\DisableDefaultKeyReplicationRegionsTrait;
    use DisassociateMpaTeam\DisassociateMpaTeamTrait;
    use EnableDefaultKeyReplicationRegions\EnableDefaultKeyReplicationRegionsTrait;
    use ExportKey\ExportKeyTrait;
    use GetAlias\GetAliasTrait;
    use GetCertificateSigningRequest\GetCertificateSigningRequestTrait;
    use GetDefaultKeyReplicationRegions\GetDefaultKeyReplicationRegionsTrait;
    use GetKey\GetKeyTrait;
    use GetMpaTeamAssociation\GetMpaTeamAssociationTrait;
    use GetParametersForExport\GetParametersForExportTrait;
    use GetParametersForImport\GetParametersForImportTrait;
    use GetPublicKeyCertificate\GetPublicKeyCertificateTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ImportKey\ImportKeyTrait;
    use ListAliases\ListAliasesTrait;
    use ListKeys\ListKeysTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RemoveKeyReplicationRegions\RemoveKeyReplicationRegionsTrait;
    use RestoreKey\RestoreKeyTrait;
    use StartKeyUsage\StartKeyUsageTrait;
    use StopKeyUsage\StopKeyUsageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAlias\UpdateAliasTrait;
}
