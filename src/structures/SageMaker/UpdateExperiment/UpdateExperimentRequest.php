<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 * @property string|null $DisplayName
 * @property string|null $Description
 */
class UpdateExperimentRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName: string,
     *     DisplayName?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
