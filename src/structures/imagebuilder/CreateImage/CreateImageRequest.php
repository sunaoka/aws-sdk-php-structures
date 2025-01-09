<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageRecipeArn
 * @property string $containerRecipeArn
 * @property string $distributionConfigurationArn
 * @property string $infrastructureConfigurationArn
 * @property Shapes\ImageTestsConfiguration $imageTestsConfiguration
 * @property bool $enhancedImageMetadataEnabled
 * @property array<string, string> $tags
 * @property string $clientToken
 * @property Shapes\ImageScanningConfiguration $imageScanningConfiguration
 * @property list<Shapes\WorkflowConfiguration> $workflows
 * @property string $executionRole
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     imageRecipeArn?: string,
     *     containerRecipeArn?: string,
     *     distributionConfigurationArn?: string,
     *     infrastructureConfigurationArn: string,
     *     imageTestsConfiguration?: Shapes\ImageTestsConfiguration,
     *     enhancedImageMetadataEnabled?: bool,
     *     tags?: array<string, string>,
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
