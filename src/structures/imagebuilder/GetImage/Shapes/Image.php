<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'AMI'|'DOCKER' $type
 * @property string $name
 * @property string $version
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property bool $enhancedImageMetadataEnabled
 * @property string $osVersion
 * @property ImageState $state
 * @property ImageRecipe $imageRecipe
 * @property ContainerRecipe $containerRecipe
 * @property string $sourcePipelineName
 * @property string $sourcePipelineArn
 * @property InfrastructureConfiguration $infrastructureConfiguration
 * @property DistributionConfiguration $distributionConfiguration
 * @property ImageTestsConfiguration $imageTestsConfiguration
 * @property string $dateCreated
 * @property OutputResources $outputResources
 * @property array<string, string> $tags
 * @property 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO' $buildType
 * @property 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM' $imageSource
 * @property ImageScanState $scanState
 * @property ImageScanningConfiguration $imageScanningConfiguration
 * @property \Aws\Api\DateTimeResult $deprecationTime
 * @property string $lifecycleExecutionId
 * @property string $executionRole
 * @property list<WorkflowConfiguration> $workflows
 */
class Image extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     type?: 'AMI'|'DOCKER',
     *     name?: string,
     *     version?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     enhancedImageMetadataEnabled?: bool,
     *     osVersion?: string,
     *     state?: ImageState,
     *     imageRecipe?: ImageRecipe,
     *     containerRecipe?: ContainerRecipe,
     *     sourcePipelineName?: string,
     *     sourcePipelineArn?: string,
     *     infrastructureConfiguration?: InfrastructureConfiguration,
     *     distributionConfiguration?: DistributionConfiguration,
     *     imageTestsConfiguration?: ImageTestsConfiguration,
     *     dateCreated?: string,
     *     outputResources?: OutputResources,
     *     tags?: array<string, string>,
     *     buildType?: 'USER_INITIATED'|'SCHEDULED'|'IMPORT'|'IMPORT_ISO',
     *     imageSource?: 'AMAZON_MANAGED'|'AWS_MARKETPLACE'|'IMPORTED'|'CUSTOM',
     *     scanState?: ImageScanState,
     *     imageScanningConfiguration?: ImageScanningConfiguration,
     *     deprecationTime?: \Aws\Api\DateTimeResult,
     *     lifecycleExecutionId?: string,
     *     executionRole?: string,
     *     workflows?: list<WorkflowConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
