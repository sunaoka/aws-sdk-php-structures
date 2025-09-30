<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property bool|null $enhancedImageMetadataEnabled
 * @property string|null $imageRecipeArn
 * @property string|null $containerRecipeArn
 * @property string|null $infrastructureConfigurationArn
 * @property string|null $distributionConfigurationArn
 * @property ImageTestsConfiguration|null $imageTestsConfiguration
 * @property Schedule|null $schedule
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property string|null $dateCreated
 * @property string|null $dateUpdated
 * @property string|null $dateLastRun
 * @property 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED'|null $lastRunStatus
 * @property string|null $dateNextRun
 * @property array<string, string>|null $tags
 * @property ImageScanningConfiguration|null $imageScanningConfiguration
 * @property string|null $executionRole
 * @property list<WorkflowConfiguration>|null $workflows
 * @property PipelineLoggingConfiguration|null $loggingConfiguration
 * @property int<0, max>|null $consecutiveFailures
 */
class ImagePipeline extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     enhancedImageMetadataEnabled?: bool|null,
     *     imageRecipeArn?: string|null,
     *     containerRecipeArn?: string|null,
     *     infrastructureConfigurationArn?: string|null,
     *     distributionConfigurationArn?: string|null,
     *     imageTestsConfiguration?: ImageTestsConfiguration|null,
     *     schedule?: Schedule|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     dateCreated?: string|null,
     *     dateUpdated?: string|null,
     *     dateLastRun?: string|null,
     *     lastRunStatus?: 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED'|null,
     *     dateNextRun?: string|null,
     *     tags?: array<string, string>|null,
     *     imageScanningConfiguration?: ImageScanningConfiguration|null,
     *     executionRole?: string|null,
     *     workflows?: list<WorkflowConfiguration>|null,
     *     loggingConfiguration?: PipelineLoggingConfiguration|null,
     *     consecutiveFailures?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
