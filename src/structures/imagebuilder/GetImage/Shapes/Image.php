<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'AMI'|'DOCKER'|null $type
 * @property string|null $name
 * @property string|null $version
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property bool|null $enhancedImageMetadataEnabled
 * @property string|null $osVersion
 * @property ImageState|null $state
 * @property ImageRecipe|null $imageRecipe
 * @property ContainerRecipe|null $containerRecipe
 * @property string|null $sourcePipelineName
 * @property string|null $sourcePipelineArn
 * @property InfrastructureConfiguration|null $infrastructureConfiguration
 * @property DistributionConfiguration|null $distributionConfiguration
 * @property ImageTestsConfiguration|null $imageTestsConfiguration
 * @property string|null $dateCreated
 * @property OutputResources|null $outputResources
 * @property array<string, string>|null $tags
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO'|null $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null $imageSource
 * @property ImageScanState|null $scanState
 * @property ImageScanningConfiguration|null $imageScanningConfiguration
 * @property \Aws\Api\DateTimeResult|null $deprecationTime
 * @property string|null $lifecycleExecutionId
 * @property string|null $executionRole
 * @property list<WorkflowConfiguration>|null $workflows
 */
class Image extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     type?: 'AMI'|'DOCKER'|null,
     *     name?: string|null,
     *     version?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     enhancedImageMetadataEnabled?: bool|null,
     *     osVersion?: string|null,
     *     state?: ImageState|null,
     *     imageRecipe?: ImageRecipe|null,
     *     containerRecipe?: ContainerRecipe|null,
     *     sourcePipelineName?: string|null,
     *     sourcePipelineArn?: string|null,
     *     infrastructureConfiguration?: InfrastructureConfiguration|null,
     *     distributionConfiguration?: DistributionConfiguration|null,
     *     imageTestsConfiguration?: ImageTestsConfiguration|null,
     *     dateCreated?: string|null,
     *     outputResources?: OutputResources|null,
     *     tags?: array<string, string>|null,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO'|null,
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM'|null,
     *     scanState?: ImageScanState|null,
     *     imageScanningConfiguration?: ImageScanningConfiguration|null,
     *     deprecationTime?: \Aws\Api\DateTimeResult|null,
     *     lifecycleExecutionId?: string|null,
     *     executionRole?: string|null,
     *     workflows?: list<WorkflowConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
