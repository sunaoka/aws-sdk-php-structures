<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTrainingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $status
 * @property string $id
 * @property Shapes\MlResourceDefinition $processingJob
 * @property Shapes\MlResourceDefinition $hpoJob
 * @property Shapes\MlResourceDefinition $modelTransformJob
 * @property list<Shapes\MlConfigDefinition> $mlModels
 */
class GetMLModelTrainingJobResponse extends Response
{
}
