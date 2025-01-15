<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectModerationLabels;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ModerationLabel>|null $ModerationLabels
 * @property string|null $ModerationModelVersion
 * @property Shapes\HumanLoopActivationOutput|null $HumanLoopActivationOutput
 * @property string|null $ProjectVersion
 * @property list<Shapes\ContentType>|null $ContentTypes
 */
class DetectModerationLabelsResponse extends Response
{
}
