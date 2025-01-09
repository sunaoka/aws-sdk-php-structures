<?php

namespace Sunaoka\Aws\Structures\signer\PutSigningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property Shapes\SigningMaterial $signingMaterial
 * @property Shapes\SignatureValidityPeriod $signatureValidityPeriod
 * @property string $platformId
 * @property Shapes\SigningPlatformOverrides $overrides
 * @property array<string, string> $signingParameters
 * @property array<string, string> $tags
 */
class PutSigningProfileRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     signingMaterial?: Shapes\SigningMaterial,
     *     signatureValidityPeriod?: Shapes\SignatureValidityPeriod,
     *     platformId: string,
     *     overrides?: Shapes\SigningPlatformOverrides,
     *     signingParameters?: array<string, string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
