<?php

namespace Sunaoka\Aws\Structures\OSIS\StopPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineName
 * @property string|null $PipelineArn
 * @property int|null $MinUnits
 * @property int|null $MaxUnits
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED'|null $Status
 * @property PipelineStatusReason|null $StatusReason
 * @property string|null $PipelineConfigurationBody
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<string>|null $IngestEndpointUrls
 * @property LogPublishingOptions|null $LogPublishingOptions
 * @property list<VpcEndpoint>|null $VpcEndpoints
 * @property BufferOptions|null $BufferOptions
 * @property EncryptionAtRestOptions|null $EncryptionAtRestOptions
 * @property string|null $VpcEndpointService
 * @property list<ServiceVpcEndpoint>|null $ServiceVpcEndpoints
 * @property list<PipelineDestination>|null $Destinations
 * @property list<Tag>|null $Tags
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     PipelineName?: string|null,
     *     PipelineArn?: string|null,
     *     MinUnits?: int|null,
     *     MaxUnits?: int|null,
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED'|null,
     *     StatusReason?: PipelineStatusReason|null,
     *     PipelineConfigurationBody?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     IngestEndpointUrls?: list<string>|null,
     *     LogPublishingOptions?: LogPublishingOptions|null,
     *     VpcEndpoints?: list<VpcEndpoint>|null,
     *     BufferOptions?: BufferOptions|null,
     *     EncryptionAtRestOptions?: EncryptionAtRestOptions|null,
     *     VpcEndpointService?: string|null,
     *     ServiceVpcEndpoints?: list<ServiceVpcEndpoint>|null,
     *     Destinations?: list<PipelineDestination>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
