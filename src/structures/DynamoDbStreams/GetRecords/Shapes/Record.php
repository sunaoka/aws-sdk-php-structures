<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventID
 * @property 'INSERT'|'MODIFY'|'REMOVE' $eventName
 * @property string $eventVersion
 * @property string $eventSource
 * @property string $awsRegion
 * @property StreamRecord $dynamodb
 * @property Identity $userIdentity
 */
class Record extends Shape
{
    /**
     * @param array{
     *     eventID?: string,
     *     eventName?: 'INSERT'|'MODIFY'|'REMOVE',
     *     eventVersion?: string,
     *     eventSource?: string,
     *     awsRegion?: string,
     *     dynamodb?: StreamRecord,
     *     userIdentity?: Identity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
