<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImagePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $imageRecipeArn
 * @property string|null $containerRecipeArn
 * @property string $infrastructureConfigurationArn
 * @property string|null $distributionConfigurationArn
 * @property Shapes\ImageTestsConfiguration|null $imageTestsConfiguration
 * @property bool|null $enhancedImageMetadataEnabled
 * @property Shapes\Schedule|null $schedule
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property array<string, string>|null $tags
 * @property string $clientToken
 * @property Shapes\ImageScanningConfiguration|null $imageScanningConfiguration
 * @property list<Shapes\WorkflowConfiguration>|null $workflows
 * @property string|null $executionRole
 */
class CreateImagePipelineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     imageRecipeArn?: string|null,
     *     containerRecipeArn?: string|null,
     *     infrastructureConfigurationArn: string,
     *     distributionConfigurationArn?: string|null,
     *     imageTestsConfiguration?: Shapes\ImageTestsConfiguration|null,
     *     enhancedImageMetadataEnabled?: bool|null,
     *     schedule?: Shapes\Schedule|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     tags?: array<string, string>|null,
     *     clientToken: string,
     *     imageScanningConfiguration?: Shapes\ImageScanningConfiguration|null,
     *     workflows?: list<Shapes\WorkflowConfiguration>|null,
     *     executionRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
