<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateExperimentRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName: string,
     *     DisplayName?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
