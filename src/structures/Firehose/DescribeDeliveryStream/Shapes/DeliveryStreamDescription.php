<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryStreamName
 * @property string $DeliveryStreamARN
 * @property 'CREATING'|'CREATING_FAILED'|'DELETING'|'DELETING_FAILED'|'ACTIVE' $DeliveryStreamStatus
 * @property FailureDescription $FailureDescription
 * @property DeliveryStreamEncryptionConfiguration $DeliveryStreamEncryptionConfiguration
 * @property 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource' $DeliveryStreamType
 * @property string $VersionId
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdateTimestamp
 * @property SourceDescription $Source
 * @property list<DestinationDescription> $Destinations
 * @property bool $HasMoreDestinations
 */
class DeliveryStreamDescription extends Shape
{
    /**
     * @param array{
     *     DeliveryStreamName: string,
     *     DeliveryStreamARN: string,
     *     DeliveryStreamStatus: 'CREATING'|'CREATING_FAILED'|'DELETING'|'DELETING_FAILED'|'ACTIVE',
     *     FailureDescription?: FailureDescription,
     *     DeliveryStreamEncryptionConfiguration?: DeliveryStreamEncryptionConfiguration,
     *     DeliveryStreamType: 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource',
     *     VersionId: string,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult,
     *     Source?: SourceDescription,
     *     Destinations: list<DestinationDescription>,
     *     HasMoreDestinations: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
