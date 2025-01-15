<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioDescription> $AudioDescriptions
 * @property AvailBlanking|null $AvailBlanking
 * @property AvailConfiguration|null $AvailConfiguration
 * @property BlackoutSlate|null $BlackoutSlate
 * @property list<CaptionDescription>|null $CaptionDescriptions
 * @property FeatureActivations|null $FeatureActivations
 * @property GlobalConfiguration|null $GlobalConfiguration
 * @property MotionGraphicsConfiguration|null $MotionGraphicsConfiguration
 * @property NielsenConfiguration|null $NielsenConfiguration
 * @property list<OutputGroup> $OutputGroups
 * @property TimecodeConfig $TimecodeConfig
 * @property list<VideoDescription> $VideoDescriptions
 * @property ThumbnailConfiguration|null $ThumbnailConfiguration
 * @property ColorCorrectionSettings|null $ColorCorrectionSettings
 */
class EncoderSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptions: list<AudioDescription>,
     *     AvailBlanking?: AvailBlanking|null,
     *     AvailConfiguration?: AvailConfiguration|null,
     *     BlackoutSlate?: BlackoutSlate|null,
     *     CaptionDescriptions?: list<CaptionDescription>|null,
     *     FeatureActivations?: FeatureActivations|null,
     *     GlobalConfiguration?: GlobalConfiguration|null,
     *     MotionGraphicsConfiguration?: MotionGraphicsConfiguration|null,
     *     NielsenConfiguration?: NielsenConfiguration|null,
     *     OutputGroups: list<OutputGroup>,
     *     TimecodeConfig: TimecodeConfig,
     *     VideoDescriptions: list<VideoDescription>,
     *     ThumbnailConfiguration?: ThumbnailConfiguration|null,
     *     ColorCorrectionSettings?: ColorCorrectionSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
