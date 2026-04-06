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
 * @property Project|null $Project
 * @property FeatureMetadata|null $FeatureMetadata
 * @property HyperParameterTuningJobSearchEntity|null $HyperParameterTuningJob
 * @property ModelDashboardModel|null $Model
 * @property ModelCard|null $ModelCard
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
     *     Project?: Project|null,
     *     FeatureMetadata?: FeatureMetadata|null,
     *     HyperParameterTuningJob?: HyperParameterTuningJobSearchEntity|null,
     *     Model?: ModelDashboardModel|null,
     *     ModelCard?: ModelCard|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
