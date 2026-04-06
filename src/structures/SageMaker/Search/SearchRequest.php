<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'Project'|'FeatureMetadata'|'HyperParameterTuningJob'|'ModelCard'|'Model' $Resource
 * @property Shapes\SearchExpression|null $SearchExpression
 * @property string|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SameAccount'|'CrossAccount'|null $CrossAccountFilterOption
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     Resource: 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'Project'|'FeatureMetadata'|'HyperParameterTuningJob'|'ModelCard'|'Model',
     *     SearchExpression?: Shapes\SearchExpression|null,
     *     SortBy?: string|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CrossAccountFilterOption?: 'SameAccount'|'CrossAccount'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
