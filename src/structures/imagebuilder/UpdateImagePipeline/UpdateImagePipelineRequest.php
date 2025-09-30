<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateImagePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 * @property string|null $description
 * @property string|null $imageRecipeArn
 * @property string|null $containerRecipeArn
 * @property string $infrastructureConfigurationArn
 * @property string|null $distributionConfigurationArn
 * @property Shapes\ImageTestsConfiguration|null $imageTestsConfiguration
 * @property bool|null $enhancedImageMetadataEnabled
 * @property Shapes\Schedule|null $schedule
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property string $clientToken
 * @property Shapes\ImageScanningConfiguration|null $imageScanningConfiguration
 * @property list<Shapes\WorkflowConfiguration>|null $workflows
 * @property Shapes\PipelineLoggingConfiguration|null $loggingConfiguration
 * @property string|null $executionRole
 */
class UpdateImagePipelineRequest extends Request
{
    /**
     * @param array{
     *     imagePipelineArn: string,
     *     description?: string|null,
     *     imageRecipeArn?: string|null,
     *     containerRecipeArn?: string|null,
     *     infrastructureConfigurationArn: string,
     *     distributionConfigurationArn?: string|null,
     *     imageTestsConfiguration?: Shapes\ImageTestsConfiguration|null,
     *     enhancedImageMetadataEnabled?: bool|null,
     *     schedule?: Shapes\Schedule|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     clientToken: string,
     *     imageScanningConfiguration?: Shapes\ImageScanningConfiguration|null,
     *     workflows?: list<Shapes\WorkflowConfiguration>|null,
     *     loggingConfiguration?: Shapes\PipelineLoggingConfiguration|null,
     *     executionRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
