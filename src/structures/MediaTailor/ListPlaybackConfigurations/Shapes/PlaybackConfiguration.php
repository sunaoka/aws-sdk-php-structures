<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdDecisionServerUrl
 * @property AvailSuppression|null $AvailSuppression
 * @property Bumper|null $Bumper
 * @property CdnConfiguration|null $CdnConfiguration
 * @property array<string, array<string, string>>|null $ConfigurationAliases
 * @property DashConfiguration|null $DashConfiguration
 * @property HlsConfiguration|null $HlsConfiguration
 * @property 'STITCHED_ONLY'|'PLAYER_SELECT'|null $InsertionMode
 * @property LivePreRollConfiguration|null $LivePreRollConfiguration
 * @property LogConfiguration|null $LogConfiguration
 * @property ManifestProcessingRules|null $ManifestProcessingRules
 * @property string|null $Name
 * @property int<1, max>|null $PersonalizationThresholdSeconds
 * @property string|null $PlaybackConfigurationArn
 * @property string|null $PlaybackEndpointPrefix
 * @property string|null $SessionInitializationEndpointPrefix
 * @property string|null $SlateAdUrl
 * @property array<string, string>|null $Tags
 * @property string|null $TranscodeProfileName
 * @property string|null $VideoContentSourceUrl
 * @property AdConditioningConfiguration|null $AdConditioningConfiguration
 * @property AdDecisionServerConfiguration|null $AdDecisionServerConfiguration
 */
class PlaybackConfiguration extends Shape
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string|null,
     *     AvailSuppression?: AvailSuppression|null,
     *     Bumper?: Bumper|null,
     *     CdnConfiguration?: CdnConfiguration|null,
     *     ConfigurationAliases?: array<string, array<string, string>>|null,
     *     DashConfiguration?: DashConfiguration|null,
     *     HlsConfiguration?: HlsConfiguration|null,
     *     InsertionMode?: 'STITCHED_ONLY'|'PLAYER_SELECT'|null,
     *     LivePreRollConfiguration?: LivePreRollConfiguration|null,
     *     LogConfiguration?: LogConfiguration|null,
     *     ManifestProcessingRules?: ManifestProcessingRules|null,
     *     Name?: string|null,
     *     PersonalizationThresholdSeconds?: int<1, max>|null,
     *     PlaybackConfigurationArn?: string|null,
     *     PlaybackEndpointPrefix?: string|null,
     *     SessionInitializationEndpointPrefix?: string|null,
     *     SlateAdUrl?: string|null,
     *     Tags?: array<string, string>|null,
     *     TranscodeProfileName?: string|null,
     *     VideoContentSourceUrl?: string|null,
     *     AdConditioningConfiguration?: AdConditioningConfiguration|null,
     *     AdDecisionServerConfiguration?: AdDecisionServerConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
