<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListSubscribers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LAKEFORMATION'|'S3'> $accessTypes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $resourceShareArn
 * @property string $resourceShareName
 * @property string $roleArn
 * @property string $s3BucketArn
 * @property list<LogSourceResource> $sources
 * @property string $subscriberArn
 * @property string $subscriberDescription
 * @property string $subscriberEndpoint
 * @property string $subscriberId
 * @property AwsIdentity $subscriberIdentity
 * @property string $subscriberName
 * @property 'ACTIVE'|'DEACTIVATED'|'PENDING'|'READY' $subscriberStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SubscriberResource extends Shape
{
    /**
     * @param array{
     *     accessTypes?: list<'LAKEFORMATION'|'S3'>,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     resourceShareArn?: string,
     *     resourceShareName?: string,
     *     roleArn?: string,
     *     s3BucketArn?: string,
     *     sources: list<LogSourceResource>,
     *     subscriberArn: string,
     *     subscriberDescription?: string,
     *     subscriberEndpoint?: string,
     *     subscriberId: string,
     *     subscriberIdentity: AwsIdentity,
     *     subscriberName: string,
     *     subscriberStatus?: 'ACTIVE'|'DEACTIVATED'|'PENDING'|'READY',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
