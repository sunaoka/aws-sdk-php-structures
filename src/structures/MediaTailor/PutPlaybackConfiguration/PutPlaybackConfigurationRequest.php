<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AdDecisionServerUrl
 * @property Shapes\AvailSuppression|null $AvailSuppression
 * @property Shapes\Bumper|null $Bumper
 * @property Shapes\CdnConfiguration|null $CdnConfiguration
 * @property array<string, array<string, string>>|null $ConfigurationAliases
 * @property Shapes\DashConfigurationForPut|null $DashConfiguration
 * @property 'STITCHED_ONLY'|'PLAYER_SELECT'|null $InsertionMode
 * @property Shapes\LivePreRollConfiguration|null $LivePreRollConfiguration
 * @property Shapes\ManifestProcessingRules|null $ManifestProcessingRules
 * @property string $Name
 * @property int<1, max>|null $PersonalizationThresholdSeconds
 * @property string|null $SlateAdUrl
 * @property array<string, string>|null $Tags
 * @property string|null $TranscodeProfileName
 * @property string|null $VideoContentSourceUrl
 */
class PutPlaybackConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string|null,
     *     AvailSuppression?: Shapes\AvailSuppression|null,
     *     Bumper?: Shapes\Bumper|null,
     *     CdnConfiguration?: Shapes\CdnConfiguration|null,
     *     ConfigurationAliases?: array<string, array<string, string>>|null,
     *     DashConfiguration?: Shapes\DashConfigurationForPut|null,
     *     InsertionMode?: 'STITCHED_ONLY'|'PLAYER_SELECT'|null,
     *     LivePreRollConfiguration?: Shapes\LivePreRollConfiguration|null,
     *     ManifestProcessingRules?: Shapes\ManifestProcessingRules|null,
     *     Name: string,
     *     PersonalizationThresholdSeconds?: int<1, max>|null,
     *     SlateAdUrl?: string|null,
     *     Tags?: array<string, string>|null,
     *     TranscodeProfileName?: string|null,
     *     VideoContentSourceUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
