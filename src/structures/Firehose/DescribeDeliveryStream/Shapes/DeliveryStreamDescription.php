<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeliveryStreamName
 * @property string $DeliveryStreamARN
 * @property 'CREATING'|'CREATING_FAILED'|'DELETING'|'DELETING_FAILED'|'ACTIVE' $DeliveryStreamStatus
 * @property FailureDescription|null $FailureDescription
 * @property DeliveryStreamEncryptionConfiguration|null $DeliveryStreamEncryptionConfiguration
 * @property 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource' $DeliveryStreamType
 * @property string $VersionId
 * @property \Aws\Api\DateTimeResult|null $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 * @property SourceDescription|null $Source
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
     *     FailureDescription?: FailureDescription|null,
     *     DeliveryStreamEncryptionConfiguration?: DeliveryStreamEncryptionConfiguration|null,
     *     DeliveryStreamType: 'DirectPut'|'KinesisStreamAsSource'|'MSKAsSource'|'DatabaseAsSource',
     *     VersionId: string,
     *     CreateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Source?: SourceDescription|null,
     *     Destinations: list<DestinationDescription>,
     *     HasMoreDestinations: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
