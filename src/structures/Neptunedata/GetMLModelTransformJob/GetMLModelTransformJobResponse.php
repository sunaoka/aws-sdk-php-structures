<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTransformJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $status
 * @property string|null $id
 * @property Shapes\MlResourceDefinition|null $baseProcessingJob
 * @property Shapes\MlResourceDefinition|null $remoteModelTransformJob
 * @property list<Shapes\MlConfigDefinition>|null $models
 */
class GetMLModelTransformJobResponse extends Response
{
}
