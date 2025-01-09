<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard' $Resource
 * @property Shapes\SuggestionQuery $SuggestionQuery
 */
class GetSearchSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     Resource: 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard',
     *     SuggestionQuery?: Shapes\SuggestionQuery
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
