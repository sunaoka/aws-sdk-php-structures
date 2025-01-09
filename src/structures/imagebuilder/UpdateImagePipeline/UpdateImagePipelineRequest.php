<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateImagePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 * @property string $description
 * @property string $imageRecipeArn
 * @property string $containerRecipeArn
 * @property string $infrastructureConfigurationArn
 * @property string $distributionConfigurationArn
 * @property Shapes\ImageTestsConfiguration $imageTestsConfiguration
 * @property bool $enhancedImageMetadataEnabled
 * @property Shapes\Schedule $schedule
 * @property 'DISABLED'|'ENABLED' $status
 * @property string $clientToken
 * @property Shapes\ImageScanningConfiguration $imageScanningConfiguration
 * @property list<Shapes\WorkflowConfiguration> $workflows
 * @property string $executionRole
 */
class UpdateImagePipelineRequest extends Request
{
    /**
     * @param array{
     *     imagePipelineArn: string,
     *     description?: string,
     *     imageRecipeArn?: string,
     *     containerRecipeArn?: string,
     *     infrastructureConfigurationArn: string,
     *     distributionConfigurationArn?: string,
     *     imageTestsConfiguration?: Shapes\ImageTestsConfiguration,
     *     enhancedImageMetadataEnabled?: bool,
     *     schedule?: Shapes\Schedule,
     *     status?: 'DISABLED'|'ENABLED',
     *     clientToken: string,
     *     imageScanningConfiguration?: Shapes\ImageScanningConfiguration,
     *     workflows?: list<Shapes\WorkflowConfiguration>,
     *     executionRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
