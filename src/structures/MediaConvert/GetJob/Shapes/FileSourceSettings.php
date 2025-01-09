<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ByteRateLimit
 * @property 'UPCONVERT'|'DISABLED' $Convert608To708
 * @property 'ENABLED'|'DISABLED' $ConvertPaintToPop
 * @property CaptionSourceFramerate $Framerate
 * @property string $SourceFile
 * @property int $TimeDelta
 * @property 'SECONDS'|'MILLISECONDS' $TimeDeltaUnits
 */
class FileSourceSettings extends Shape
{
    /**
     * @param array{
     *     ByteRateLimit?: 'ENABLED'|'DISABLED',
     *     Convert608To708?: 'UPCONVERT'|'DISABLED',
     *     ConvertPaintToPop?: 'ENABLED'|'DISABLED',
     *     Framerate?: CaptionSourceFramerate,
     *     SourceFile?: string,
     *     TimeDelta?: int,
     *     TimeDeltaUnits?: 'SECONDS'|'MILLISECONDS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
