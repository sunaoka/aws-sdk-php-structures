<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AdDecisionServerUrl
 * @property Shapes\AvailSuppression|null $AvailSuppression
 * @property Shapes\Bumper|null $Bumper
 * @property Shapes\CdnConfiguration|null $CdnConfiguration
 * @property array<string, array<string, string>>|null $ConfigurationAliases
 * @property Shapes\DashConfiguration|null $DashConfiguration
 * @property Shapes\HlsConfiguration|null $HlsConfiguration
 * @property 'STITCHED_ONLY'|'PLAYER_SELECT'|null $InsertionMode
 * @property Shapes\LivePreRollConfiguration|null $LivePreRollConfiguration
 * @property Shapes\LogConfiguration|null $LogConfiguration
 * @property Shapes\ManifestProcessingRules|null $ManifestProcessingRules
 * @property string|null $Name
 * @property int<1, max>|null $PersonalizationThresholdSeconds
 * @property string|null $PlaybackConfigurationArn
 * @property string|null $PlaybackEndpointPrefix
 * @property string|null $SessionInitializationEndpointPrefix
 * @property string|null $SlateAdUrl
 * @property array<string, string>|null $Tags
 * @property string|null $TranscodeProfileName
 * @property string|null $VideoContentSourceUrl
 * @property Shapes\AdConditioningConfiguration|null $AdConditioningConfiguration
 * @property Shapes\AdDecisionServerConfiguration|null $AdDecisionServerConfiguration
 */
class GetPlaybackConfigurationResponse extends Response
{
}
