<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 * @property string $DisplayName
 * @property string $Description
 */
class UpdateExperimentRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName: string,
     *     DisplayName?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
