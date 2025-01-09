<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateThreatIntelSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $Name
 * @property 'TXT'|'STIX'|'OTX_CSV'|'ALIEN_VAULT'|'PROOF_POINT'|'FIRE_EYE' $Format
 * @property string $Location
 * @property bool $Activate
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateThreatIntelSetRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     Name: string,
     *     Format: 'TXT'|'STIX'|'OTX_CSV'|'ALIEN_VAULT'|'PROOF_POINT'|'FIRE_EYE',
     *     Location: string,
     *     Activate: bool,
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
