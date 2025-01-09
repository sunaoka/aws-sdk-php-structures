<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingJob $TrainingJob
 * @property Experiment $Experiment
 * @property Trial $Trial
 * @property TrialComponent $TrialComponent
 * @property Endpoint $Endpoint
 * @property ModelPackage $ModelPackage
 * @property ModelPackageGroup $ModelPackageGroup
 * @property Pipeline $Pipeline
 * @property PipelineExecution $PipelineExecution
 * @property FeatureGroup $FeatureGroup
 * @property FeatureMetadata $FeatureMetadata
 * @property Project $Project
 * @property HyperParameterTuningJobSearchEntity $HyperParameterTuningJob
 * @property ModelCard $ModelCard
 * @property ModelDashboardModel $Model
 */
class SearchRecord extends Shape
{
    /**
     * @param array{
     *     TrainingJob?: TrainingJob,
     *     Experiment?: Experiment,
     *     Trial?: Trial,
     *     TrialComponent?: TrialComponent,
     *     Endpoint?: Endpoint,
     *     ModelPackage?: ModelPackage,
     *     ModelPackageGroup?: ModelPackageGroup,
     *     Pipeline?: Pipeline,
     *     PipelineExecution?: PipelineExecution,
     *     FeatureGroup?: FeatureGroup,
     *     FeatureMetadata?: FeatureMetadata,
     *     Project?: Project,
     *     HyperParameterTuningJob?: HyperParameterTuningJobSearchEntity,
     *     ModelCard?: ModelCard,
     *     Model?: ModelDashboardModel
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
