<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdDecisionServerUrl
 * @property AvailSuppression $AvailSuppression
 * @property Bumper $Bumper
 * @property CdnConfiguration $CdnConfiguration
 * @property array<string, array<string, string>> $ConfigurationAliases
 * @property DashConfiguration $DashConfiguration
 * @property HlsConfiguration $HlsConfiguration
 * @property 'STITCHED_ONLY'|'PLAYER_SELECT' $InsertionMode
 * @property LivePreRollConfiguration $LivePreRollConfiguration
 * @property LogConfiguration $LogConfiguration
 * @property ManifestProcessingRules $ManifestProcessingRules
 * @property string $Name
 * @property int $PersonalizationThresholdSeconds
 * @property string $PlaybackConfigurationArn
 * @property string $PlaybackEndpointPrefix
 * @property string $SessionInitializationEndpointPrefix
 * @property string $SlateAdUrl
 * @property array<string, string> $Tags
 * @property string $TranscodeProfileName
 * @property string $VideoContentSourceUrl
 */
class PlaybackConfiguration extends Shape
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string,
     *     AvailSuppression?: AvailSuppression,
     *     Bumper?: Bumper,
     *     CdnConfiguration?: CdnConfiguration,
     *     ConfigurationAliases?: array<string, array<string, string>>,
     *     DashConfiguration?: DashConfiguration,
     *     HlsConfiguration?: HlsConfiguration,
     *     InsertionMode?: 'STITCHED_ONLY'|'PLAYER_SELECT',
     *     LivePreRollConfiguration?: LivePreRollConfiguration,
     *     LogConfiguration?: LogConfiguration,
     *     ManifestProcessingRules?: ManifestProcessingRules,
     *     Name?: string,
     *     PersonalizationThresholdSeconds?: int,
     *     PlaybackConfigurationArn?: string,
     *     PlaybackEndpointPrefix?: string,
     *     SessionInitializationEndpointPrefix?: string,
     *     SlateAdUrl?: string,
     *     Tags?: array<string, string>,
     *     TranscodeProfileName?: string,
     *     VideoContentSourceUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
