<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $profileName
 * @property string|null $profileVersion
 * @property string|null $profileVersionArn
 * @property SigningMaterial|null $signingMaterial
 * @property SignatureValidityPeriod|null $signatureValidityPeriod
 * @property string|null $platformId
 * @property string|null $platformDisplayName
 * @property array<string, string>|null $signingParameters
 * @property 'Active'|'Canceled'|'Revoked'|null $status
 * @property string|null $arn
 * @property array<string, string>|null $tags
 */
class SigningProfile extends Shape
{
    /**
     * @param array{
     *     profileName?: string|null,
     *     profileVersion?: string|null,
     *     profileVersionArn?: string|null,
     *     signingMaterial?: SigningMaterial|null,
     *     signatureValidityPeriod?: SignatureValidityPeriod|null,
     *     platformId?: string|null,
     *     platformDisplayName?: string|null,
     *     signingParameters?: array<string, string>|null,
     *     status?: 'Active'|'Canceled'|'Revoked'|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
