<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $imageRecipeArn
 * @property string|null $containerRecipeArn
 * @property string|null $distributionConfigurationArn
 * @property string $infrastructureConfigurationArn
 * @property Shapes\ImageTestsConfiguration|null $imageTestsConfiguration
 * @property bool|null $enhancedImageMetadataEnabled
 * @property array<string, string>|null $tags
 * @property string $clientToken
 * @property Shapes\ImageScanningConfiguration|null $imageScanningConfiguration
 * @property list<Shapes\WorkflowConfiguration>|null $workflows
 * @property string|null $executionRole
 */
class CreateImageRequest extends Request
{
    /**
     * @param array{
     *     imageRecipeArn?: string|null,
     *     containerRecipeArn?: string|null,
     *     distributionConfigurationArn?: string|null,
     *     infrastructureConfigurationArn: string,
     *     imageTestsConfiguration?: Shapes\ImageTestsConfiguration|null,
     *     enhancedImageMetadataEnabled?: bool|null,
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
