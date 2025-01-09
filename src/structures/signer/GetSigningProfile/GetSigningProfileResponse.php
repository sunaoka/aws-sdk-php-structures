<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $profileName
 * @property string $profileVersion
 * @property string $profileVersionArn
 * @property Shapes\SigningProfileRevocationRecord $revocationRecord
 * @property Shapes\SigningMaterial $signingMaterial
 * @property string $platformId
 * @property string $platformDisplayName
 * @property Shapes\SignatureValidityPeriod $signatureValidityPeriod
 * @property Shapes\SigningPlatformOverrides $overrides
 * @property array<string, string> $signingParameters
 * @property 'Active'|'Canceled'|'Revoked' $status
 * @property string $statusReason
 * @property string $arn
 * @property array<string, string> $tags
 */
class GetSigningProfileResponse extends Response
{
}
