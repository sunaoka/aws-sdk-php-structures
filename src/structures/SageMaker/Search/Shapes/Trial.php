<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrialName
 * @property string|null $TrialArn
 * @property string|null $DisplayName
 * @property string|null $ExperimentName
 * @property TrialSource|null $Source
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $LastModifiedBy
 * @property MetadataProperties|null $MetadataProperties
 * @property list<Tag>|null $Tags
 * @property list<TrialComponentSimpleSummary>|null $TrialComponentSummaries
 */
class Trial extends Shape
{
    /**
     * @param array{
     *     TrialName?: string|null,
     *     TrialArn?: string|null,
     *     DisplayName?: string|null,
     *     ExperimentName?: string|null,
     *     Source?: TrialSource|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: UserContext|null,
     *     MetadataProperties?: MetadataProperties|null,
     *     Tags?: list<Tag>|null,
     *     TrialComponentSummaries?: list<TrialComponentSimpleSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
