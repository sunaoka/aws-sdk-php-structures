<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateTrustedEntitySet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $Name
 * @property 'TXT'|'STIX'|'OTX_CSV'|'ALIEN_VAULT'|'PROOF_POINT'|'FIRE_EYE' $Format
 * @property string $Location
 * @property string|null $ExpectedBucketOwner
 * @property bool $Activate
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateTrustedEntitySetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     Name: string,
     *     Format: 'TXT'|'STIX'|'OTX_CSV'|'ALIEN_VAULT'|'PROOF_POINT'|'FIRE_EYE',
     *     Location: string,
     *     ExpectedBucketOwner?: string|null,
     *     Activate: bool,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
