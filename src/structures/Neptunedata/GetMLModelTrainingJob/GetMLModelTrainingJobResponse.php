<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLModelTrainingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $status
 * @property string|null $id
 * @property Shapes\MlResourceDefinition|null $processingJob
 * @property Shapes\MlResourceDefinition|null $hpoJob
 * @property Shapes\MlResourceDefinition|null $modelTransformJob
 * @property list<Shapes\MlConfigDefinition>|null $mlModels
 */
class GetMLModelTrainingJobResponse extends Response
{
}
