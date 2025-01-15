<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListSubscribers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LAKEFORMATION'|'S3'>|null $accessTypes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $resourceShareArn
 * @property string|null $resourceShareName
 * @property string|null $roleArn
 * @property string|null $s3BucketArn
 * @property list<LogSourceResource> $sources
 * @property string $subscriberArn
 * @property string|null $subscriberDescription
 * @property string|null $subscriberEndpoint
 * @property string $subscriberId
 * @property AwsIdentity $subscriberIdentity
 * @property string $subscriberName
 * @property 'ACTIVE'|'DEACTIVATED'|'PENDING'|'READY'|null $subscriberStatus
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class SubscriberResource extends Shape
{
    /**
     * @param array{
     *     accessTypes?: list<'LAKEFORMATION'|'S3'>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     resourceShareArn?: string|null,
     *     resourceShareName?: string|null,
     *     roleArn?: string|null,
     *     s3BucketArn?: string|null,
     *     sources: list<LogSourceResource>,
     *     subscriberArn: string,
     *     subscriberDescription?: string|null,
     *     subscriberEndpoint?: string|null,
     *     subscriberId: string,
     *     subscriberIdentity: AwsIdentity,
     *     subscriberName: string,
     *     subscriberStatus?: 'ACTIVE'|'DEACTIVATED'|'PENDING'|'READY'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
