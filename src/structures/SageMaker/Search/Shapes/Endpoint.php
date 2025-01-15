<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property string $EndpointConfigName
 * @property list<ProductionVariantSummary>|null $ProductionVariants
 * @property DataCaptureConfigSummary|null $DataCaptureConfig
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed' $EndpointStatus
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<MonitoringSchedule>|null $MonitoringSchedules
 * @property list<Tag>|null $Tags
 * @property list<ProductionVariantSummary>|null $ShadowProductionVariants
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointArn: string,
     *     EndpointConfigName: string,
     *     ProductionVariants?: list<ProductionVariantSummary>|null,
     *     DataCaptureConfig?: DataCaptureConfigSummary|null,
     *     EndpointStatus: 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed',
     *     FailureReason?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     MonitoringSchedules?: list<MonitoringSchedule>|null,
     *     Tags?: list<Tag>|null,
     *     ShadowProductionVariants?: list<ProductionVariantSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
