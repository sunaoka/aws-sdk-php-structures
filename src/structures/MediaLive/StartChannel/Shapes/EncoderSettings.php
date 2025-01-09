<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioDescription> $AudioDescriptions
 * @property AvailBlanking $AvailBlanking
 * @property AvailConfiguration $AvailConfiguration
 * @property BlackoutSlate $BlackoutSlate
 * @property list<CaptionDescription> $CaptionDescriptions
 * @property FeatureActivations $FeatureActivations
 * @property GlobalConfiguration $GlobalConfiguration
 * @property MotionGraphicsConfiguration $MotionGraphicsConfiguration
 * @property NielsenConfiguration $NielsenConfiguration
 * @property list<OutputGroup> $OutputGroups
 * @property TimecodeConfig $TimecodeConfig
 * @property list<VideoDescription> $VideoDescriptions
 * @property ThumbnailConfiguration $ThumbnailConfiguration
 * @property ColorCorrectionSettings $ColorCorrectionSettings
 */
class EncoderSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptions: list<AudioDescription>,
     *     AvailBlanking?: AvailBlanking,
     *     AvailConfiguration?: AvailConfiguration,
     *     BlackoutSlate?: BlackoutSlate,
     *     CaptionDescriptions?: list<CaptionDescription>,
     *     FeatureActivations?: FeatureActivations,
     *     GlobalConfiguration?: GlobalConfiguration,
     *     MotionGraphicsConfiguration?: MotionGraphicsConfiguration,
     *     NielsenConfiguration?: NielsenConfiguration,
     *     OutputGroups: list<OutputGroup>,
     *     TimecodeConfig: TimecodeConfig,
     *     VideoDescriptions: list<VideoDescription>,
     *     ThumbnailConfiguration?: ThumbnailConfiguration,
     *     ColorCorrectionSettings?: ColorCorrectionSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
