<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainingJob|null $TrainingJob
 * @property Experiment|null $Experiment
 * @property Trial|null $Trial
 * @property TrialComponent|null $TrialComponent
 * @property Endpoint|null $Endpoint
 * @property ModelPackage|null $ModelPackage
 * @property ModelPackageGroup|null $ModelPackageGroup
 * @property Pipeline|null $Pipeline
 * @property PipelineExecution|null $PipelineExecution
 * @property FeatureGroup|null $FeatureGroup
 * @property FeatureMetadata|null $FeatureMetadata
 * @property Project|null $Project
 * @property HyperParameterTuningJobSearchEntity|null $HyperParameterTuningJob
 * @property ModelCard|null $ModelCard
 * @property ModelDashboardModel|null $Model
 */
class SearchRecord extends Shape
{
    /**
     * @param array{
     *     TrainingJob?: TrainingJob|null,
     *     Experiment?: Experiment|null,
     *     Trial?: Trial|null,
     *     TrialComponent?: TrialComponent|null,
     *     Endpoint?: Endpoint|null,
     *     ModelPackage?: ModelPackage|null,
     *     ModelPackageGroup?: ModelPackageGroup|null,
     *     Pipeline?: Pipeline|null,
     *     PipelineExecution?: PipelineExecution|null,
     *     FeatureGroup?: FeatureGroup|null,
     *     FeatureMetadata?: FeatureMetadata|null,
     *     Project?: Project|null,
     *     HyperParameterTuningJob?: HyperParameterTuningJobSearchEntity|null,
     *     ModelCard?: ModelCard|null,
     *     Model?: ModelDashboardModel|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
