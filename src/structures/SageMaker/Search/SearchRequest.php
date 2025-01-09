<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard' $Resource
 * @property Shapes\SearchExpression $SearchExpression
 * @property string $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'SameAccount'|'CrossAccount' $CrossAccountFilterOption
 * @property list<Shapes\VisibilityConditions> $VisibilityConditions
 */
class SearchRequest extends Request
{
    /**
     * @param array{
     *     Resource: 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard',
     *     SearchExpression?: Shapes\SearchExpression,
     *     SortBy?: string,
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     CrossAccountFilterOption?: 'SameAccount'|'CrossAccount',
     *     VisibilityConditions?: list<Shapes\VisibilityConditions>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
