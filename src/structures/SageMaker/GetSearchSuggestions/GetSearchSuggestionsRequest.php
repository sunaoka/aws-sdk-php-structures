<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetSearchSuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard'|'PipelineVersion' $Resource
 * @property Shapes\SuggestionQuery|null $SuggestionQuery
 */
class GetSearchSuggestionsRequest extends Request
{
    /**
     * @param array{
     *     Resource: 'TrainingJob'|'Experiment'|'ExperimentTrial'|'ExperimentTrialComponent'|'Endpoint'|'Model'|'ModelPackage'|'ModelPackageGroup'|'Pipeline'|'PipelineExecution'|'FeatureGroup'|'FeatureMetadata'|'Image'|'ImageVersion'|'Project'|'HyperParameterTuningJob'|'ModelCard'|'PipelineVersion',
     *     SuggestionQuery?: Shapes\SuggestionQuery|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
