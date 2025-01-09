<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateExperiment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExperimentName
 * @property string $DisplayName
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateExperimentRequest extends Request
{
    /**
     * @param array{
     *     ExperimentName: string,
     *     DisplayName?: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
