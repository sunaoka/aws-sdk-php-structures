<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property string $EndpointArn
 * @property string $EndpointConfigName
 * @property list<ProductionVariantSummary> $ProductionVariants
 * @property DataCaptureConfigSummary $DataCaptureConfig
 * @property 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed' $EndpointStatus
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<MonitoringSchedule> $MonitoringSchedules
 * @property list<Tag> $Tags
 * @property list<ProductionVariantSummary> $ShadowProductionVariants
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     EndpointName: string,
     *     EndpointArn: string,
     *     EndpointConfigName: string,
     *     ProductionVariants?: list<ProductionVariantSummary>,
     *     DataCaptureConfig?: DataCaptureConfigSummary,
     *     EndpointStatus: 'OutOfService'|'Creating'|'Updating'|'SystemUpdating'|'RollingBack'|'InService'|'Deleting'|'Failed'|'UpdateRollbackFailed',
     *     FailureReason?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     MonitoringSchedules?: list<MonitoringSchedule>,
     *     Tags?: list<Tag>,
     *     ShadowProductionVariants?: list<ProductionVariantSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
