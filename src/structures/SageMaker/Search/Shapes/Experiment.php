<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExperimentName
 * @property string|null $ExperimentArn
 * @property string|null $DisplayName
 * @property ExperimentSource|null $Source
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 * @property list<Tag>|null $Tags
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     ExperimentName?: string|null,
     *     ExperimentArn?: string|null,
     *     DisplayName?: string|null,
     *     Source?: ExperimentSource|null,
     *     Description?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
