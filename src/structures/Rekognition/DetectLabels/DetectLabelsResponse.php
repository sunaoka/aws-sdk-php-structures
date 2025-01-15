<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectLabels;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Label>|null $Labels
 * @property 'ROTATE_0'|'ROTATE_90'|'ROTATE_180'|'ROTATE_270'|null $OrientationCorrection
 * @property string|null $LabelModelVersion
 * @property Shapes\DetectLabelsImageProperties|null $ImageProperties
 */
class DetectLabelsResponse extends Response
{
}
