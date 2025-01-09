<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListArchives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ArchiveName
 * @property string $EventSourceArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $State
 * @property string $StateReason
 * @property int<0, max> $RetentionDays
 * @property int $SizeBytes
 * @property int $EventCount
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class Archive extends Shape
{
    /**
     * @param array{
     *     ArchiveName?: string,
     *     EventSourceArn?: string,
     *     State?: 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     StateReason?: string,
     *     RetentionDays?: int<0, max>,
     *     SizeBytes?: int,
     *     EventCount?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
