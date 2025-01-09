<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTransformJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $status
 * @property string $id
 * @property Shapes\MlResourceDefinition $baseProcessingJob
 * @property Shapes\MlResourceDefinition $remoteModelTransformJob
 * @property list<Shapes\MlConfigDefinition> $models
 */
class GetMLModelTransformJobResponse extends Response
{
}
