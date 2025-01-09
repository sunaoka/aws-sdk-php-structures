<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Label> $Labels
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270' $OrientationCorrection
 * @property string $LabelModelVersion
 * @property Shapes\DetectLabelsImageProperties $ImageProperties
 */
class DetectLabelsResponse extends Response
{
}
