<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FreeOfPersonallyIdentifiableInformation'|'FreeOfAdultContent'> $ContentClassifiers
 */
class LabelingJobDataAttributes extends Shape
{
    /**
     * @param array{ContentClassifiers?: list<'FreeOfPersonallyIdentifiableInformation'|'FreeOfAdultContent'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
