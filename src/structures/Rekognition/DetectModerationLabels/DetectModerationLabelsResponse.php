<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ModerationLabel> $ModerationLabels
 * @property string $ModerationModelVersion
 * @property Shapes\HumanLoopActivationOutput $HumanLoopActivationOutput
 * @property string $ProjectVersion
 * @property list<Shapes\ContentType> $ContentTypes
 */
class DetectModerationLabelsResponse extends Response
{
}
