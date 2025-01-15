<?php

namespace Sunaoka\Aws\Structures\signer\PutSigningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property Shapes\SigningMaterial|null $signingMaterial
 * @property Shapes\SignatureValidityPeriod|null $signatureValidityPeriod
 * @property string $platformId
 * @property Shapes\SigningPlatformOverrides|null $overrides
 * @property array<string, string>|null $signingParameters
 * @property array<string, string>|null $tags
 */
class PutSigningProfileRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     signingMaterial?: Shapes\SigningMaterial|null,
     *     signatureValidityPeriod?: Shapes\SignatureValidityPeriod|null,
     *     platformId: string,
     *     overrides?: Shapes\SigningPlatformOverrides|null,
     *     signingParameters?: array<string, string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
