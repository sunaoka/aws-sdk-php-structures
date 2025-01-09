<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AdDecisionServerUrl
 * @property Shapes\AvailSuppression $AvailSuppression
 * @property Shapes\Bumper $Bumper
 * @property Shapes\CdnConfiguration $CdnConfiguration
 * @property array<string, array<string, string>> $ConfigurationAliases
 * @property Shapes\DashConfiguration $DashConfiguration
 * @property Shapes\HlsConfiguration $HlsConfiguration
 * @property 'STITCHED_ONLY'|'PLAYER_SELECT' $InsertionMode
 * @property Shapes\LivePreRollConfiguration $LivePreRollConfiguration
 * @property Shapes\LogConfiguration $LogConfiguration
 * @property Shapes\ManifestProcessingRules $ManifestProcessingRules
 * @property string $Name
 * @property int<1, max> $PersonalizationThresholdSeconds
 * @property string $PlaybackConfigurationArn
 * @property string $PlaybackEndpointPrefix
 * @property string $SessionInitializationEndpointPrefix
 * @property string $SlateAdUrl
 * @property array<string, string> $Tags
 * @property string $TranscodeProfileName
 * @property string $VideoContentSourceUrl
 */
class PutPlaybackConfigurationResponse extends Response
{
}
