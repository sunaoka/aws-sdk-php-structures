<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventID
 * @property 'INSERT'|'MODIFY'|'REMOVE'|null $eventName
 * @property string|null $eventVersion
 * @property string|null $eventSource
 * @property string|null $awsRegion
 * @property StreamRecord|null $dynamodb
 * @property Identity|null $userIdentity
 */
class Record extends Shape
{
    /**
     * @param array{
     *     eventID?: string|null,
     *     eventName?: 'INSERT'|'MODIFY'|'REMOVE'|null,
     *     eventVersion?: string|null,
     *     eventSource?: string|null,
     *     awsRegion?: string|null,
     *     dynamodb?: StreamRecord|null,
     *     userIdentity?: Identity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
