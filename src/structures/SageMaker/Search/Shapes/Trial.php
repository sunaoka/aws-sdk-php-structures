<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrialName
 * @property string $TrialArn
 * @property string $DisplayName
 * @property string $ExperimentName
 * @property TrialSource $Source
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property UserContext $LastModifiedBy
 * @property MetadataProperties $MetadataProperties
 * @property list<Tag> $Tags
 * @property list<TrialComponentSimpleSummary> $TrialComponentSummaries
 */
class Trial extends Shape
{
    /**
     * @param array{
     *     TrialName?: string,
     *     TrialArn?: string,
     *     DisplayName?: string,
     *     ExperimentName?: string,
     *     Source?: TrialSource,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: UserContext,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: UserContext,
     *     MetadataProperties?: MetadataProperties,
     *     Tags?: list<Tag>,
     *     TrialComponentSummaries?: list<TrialComponentSimpleSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
