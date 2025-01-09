<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PipelineName
 * @property string $PipelineArn
 * @property int $MinUnits
 * @property int $MaxUnits
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED' $Status
 * @property PipelineStatusReason $StatusReason
 * @property string $PipelineConfigurationBody
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property list<string> $IngestEndpointUrls
 * @property LogPublishingOptions $LogPublishingOptions
 * @property list<VpcEndpoint> $VpcEndpoints
 * @property BufferOptions $BufferOptions
 * @property EncryptionAtRestOptions $EncryptionAtRestOptions
 * @property string $VpcEndpointService
 * @property list<ServiceVpcEndpoint> $ServiceVpcEndpoints
 * @property list<PipelineDestination> $Destinations
 * @property list<Tag> $Tags
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     PipelineName?: string,
     *     PipelineArn?: string,
     *     MinUnits?: int,
     *     MaxUnits?: int,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED',
     *     StatusReason?: PipelineStatusReason,
     *     PipelineConfigurationBody?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     IngestEndpointUrls?: list<string>,
     *     LogPublishingOptions?: LogPublishingOptions,
     *     VpcEndpoints?: list<VpcEndpoint>,
     *     BufferOptions?: BufferOptions,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptions,
     *     VpcEndpointService?: string,
     *     ServiceVpcEndpoints?: list<ServiceVpcEndpoint>,
     *     Destinations?: list<PipelineDestination>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
