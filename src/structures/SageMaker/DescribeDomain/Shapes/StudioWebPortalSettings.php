<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DataWrangler'|'FeatureStore'|'EmrClusters'|'AutoMl'|'Experiments'|'Training'|'ModelEvaluation'|'Pipelines'|'Models'|'JumpStart'|'InferenceRecommender'|'Endpoints'|'Projects'|'InferenceOptimization'>|null $HiddenMlTools
 * @property list<'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'>|null $HiddenAppTypes
 */
class StudioWebPortalSettings extends Shape
{
    /**
     * @param array{
     *     HiddenMlTools?: list<'DataWrangler'|'FeatureStore'|'EmrClusters'|'AutoMl'|'Experiments'|'Training'|'ModelEvaluation'|'Pipelines'|'Models'|'JumpStart'|'InferenceRecommender'|'Endpoints'|'Projects'|'InferenceOptimization'>|null,
     *     HiddenAppTypes?: list<'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
