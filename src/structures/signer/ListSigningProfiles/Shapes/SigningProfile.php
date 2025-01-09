<?php

namespace Sunaoka\Aws\Structures\signer\ListSigningProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileName
 * @property string $profileVersion
 * @property string $profileVersionArn
 * @property SigningMaterial $signingMaterial
 * @property SignatureValidityPeriod $signatureValidityPeriod
 * @property string $platformId
 * @property string $platformDisplayName
 * @property array<string, string> $signingParameters
 * @property 'Active'|'Canceled'|'Revoked' $status
 * @property string $arn
 * @property array<string, string> $tags
 */
class SigningProfile extends Shape
{
    /**
     * @param array{
     *     profileName?: string,
     *     profileVersion?: string,
     *     profileVersionArn?: string,
     *     signingMaterial?: SigningMaterial,
     *     signatureValidityPeriod?: SignatureValidityPeriod,
     *     platformId?: string,
     *     platformDisplayName?: string,
     *     signingParameters?: array<string, string>,
     *     status?: 'Active'|'Canceled'|'Revoked',
     *     arn?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
