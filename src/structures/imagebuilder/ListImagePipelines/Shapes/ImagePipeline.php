<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property bool $enhancedImageMetadataEnabled
 * @property string $imageRecipeArn
 * @property string $containerRecipeArn
 * @property string $infrastructureConfigurationArn
 * @property string $distributionConfigurationArn
 * @property ImageTestsConfiguration $imageTestsConfiguration
 * @property Schedule $schedule
 * @property 'DISABLED'|'ENABLED' $status
 * @property string $dateCreated
 * @property string $dateUpdated
 * @property string $dateLastRun
 * @property string $dateNextRun
 * @property array<string, string> $tags
 * @property ImageScanningConfiguration $imageScanningConfiguration
 * @property string $executionRole
 * @property list<WorkflowConfiguration> $workflows
 */
class ImagePipeline extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     enhancedImageMetadataEnabled?: bool,
     *     imageRecipeArn?: string,
     *     containerRecipeArn?: string,
     *     infrastructureConfigurationArn?: string,
     *     distributionConfigurationArn?: string,
     *     imageTestsConfiguration?: ImageTestsConfiguration,
     *     schedule?: Schedule,
     *     status?: 'DISABLED'|'ENABLED',
     *     dateCreated?: string,
     *     dateUpdated?: string,
     *     dateLastRun?: string,
     *     dateNextRun?: string,
     *     tags?: array<string, string>,
     *     imageScanningConfiguration?: ImageScanningConfiguration,
     *     executionRole?: string,
     *     workflows?: list<WorkflowConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
