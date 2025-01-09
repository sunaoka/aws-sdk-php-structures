<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdDecisionServerUrl
 * @property Shapes\AvailSuppression $AvailSuppression
 * @property Shapes\Bumper $Bumper
 * @property Shapes\CdnConfiguration $CdnConfiguration
 * @property array<string, array<string, string>> $ConfigurationAliases
 * @property Shapes\DashConfigurationForPut $DashConfiguration
 * @property 'STITCHED_ONLY'|'PLAYER_SELECT' $InsertionMode
 * @property Shapes\LivePreRollConfiguration $LivePreRollConfiguration
 * @property Shapes\ManifestProcessingRules $ManifestProcessingRules
 * @property string $Name
 * @property int $PersonalizationThresholdSeconds
 * @property string $SlateAdUrl
 * @property array<string, string> $Tags
 * @property string $TranscodeProfileName
 * @property string $VideoContentSourceUrl
 */
class PutPlaybackConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string,
     *     AvailSuppression?: Shapes\AvailSuppression,
     *     Bumper?: Shapes\Bumper,
     *     CdnConfiguration?: Shapes\CdnConfiguration,
     *     ConfigurationAliases?: array<string, array<string, string>>,
     *     DashConfiguration?: Shapes\DashConfigurationForPut,
     *     InsertionMode?: 'STITCHED_ONLY'|'PLAYER_SELECT',
     *     LivePreRollConfiguration?: Shapes\LivePreRollConfiguration,
     *     ManifestProcessingRules?: Shapes\ManifestProcessingRules,
     *     Name: string,
     *     PersonalizationThresholdSeconds?: int,
     *     SlateAdUrl?: string,
     *     Tags?: array<string, string>,
     *     TranscodeProfileName?: string,
     *     VideoContentSourceUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
