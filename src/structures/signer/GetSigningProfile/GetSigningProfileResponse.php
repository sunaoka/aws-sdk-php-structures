<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $profileName
 * @property string|null $profileVersion
 * @property string|null $profileVersionArn
 * @property Shapes\SigningProfileRevocationRecord|null $revocationRecord
 * @property Shapes\SigningMaterial|null $signingMaterial
 * @property string|null $platformId
 * @property string|null $platformDisplayName
 * @property Shapes\SignatureValidityPeriod|null $signatureValidityPeriod
 * @property Shapes\SigningPlatformOverrides|null $overrides
 * @property array<string, string>|null $signingParameters
 * @property 'Active'|'Canceled'|'Revoked'|null $status
 * @property string|null $statusReason
 * @property string|null $arn
 * @property array<string, string>|null $tags
 */
class GetSigningProfileResponse extends Response
{
}
