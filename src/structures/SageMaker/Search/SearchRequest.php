<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard' $Resource
 * @property Shapes\SearchExpression|null $SearchExpression
 * @property string|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SameAccount'|'CrossAccount'|null $CrossAccountFilterOption
 * @property list<Shapes\VisibilityConditions>|null $VisibilityConditions
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     Resource: 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard',
     *     SearchExpression?: Shapes\SearchExpression|null,
     *     SortBy?: string|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CrossAccountFilterOption?: 'SameAccount'|'CrossAccount'|null,
     *     VisibilityConditions?: list<Shapes\VisibilityConditions>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
