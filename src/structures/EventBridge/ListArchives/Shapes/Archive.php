<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListArchives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ArchiveName
 * @property string|null $EventSourceArn
 * @property 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $State
 * @property string|null $StateReason
 * @property int<0, max>|null $RetentionDays
 * @property int|null $SizeBytes
 * @property int|null $EventCount
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class Archive extends Shape
{
    /**
     * @param array{
     *     ArchiveName?: string|null,
     *     EventSourceArn?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     StateReason?: string|null,
     *     RetentionDays?: int<0, max>|null,
     *     SizeBytes?: int|null,
     *     EventCount?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
