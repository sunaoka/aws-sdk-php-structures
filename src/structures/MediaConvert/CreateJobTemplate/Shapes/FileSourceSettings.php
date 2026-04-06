<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $ByteRateLimit
 * @property 'UPCONVERT'|'DISABLED'|null $Convert608To708
 * @property 'ENABLED'|'DISABLED'|null $ConvertPaintToPop
 * @property CaptionSourceFramerate|null $Framerate
 * @property string|null $SourceFile
 * @property int<-2147483648, 2147483647>|null $TimeDelta
 * @property 'SECONDS'|'MILLISECONDS'|null $TimeDeltaUnits
 */
class FileSourceSettings extends Shape
{
    /**
     * @param array{
     *     ByteRateLimit?: 'ENABLED'|'DISABLED'|null,
     *     Convert608To708?: 'UPCONVERT'|'DISABLED'|null,
     *     ConvertPaintToPop?: 'ENABLED'|'DISABLED'|null,
     *     Framerate?: CaptionSourceFramerate|null,
     *     SourceFile?: string|null,
     *     TimeDelta?: int<-2147483648, 2147483647>|null,
     *     TimeDeltaUnits?: 'SECONDS'|'MILLISECONDS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
