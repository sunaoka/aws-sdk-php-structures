<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExperimentName
 * @property string $ExperimentArn
 * @property string $DisplayName
 * @property ExperimentSource $Source
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 * @property list<Tag> $Tags
 */
class Experiment extends Shape
{
    /**
     * @param array{
     *     ExperimentName?: string,
     *     ExperimentArn?: string,
     *     DisplayName?: string,
     *     Source?: ExperimentSource,
     *     Description?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
