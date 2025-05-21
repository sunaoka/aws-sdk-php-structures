<?php

namespace Sunaoka\Aws\Structures\Emr\DescribePersistentAppUI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PersistentAppUIId
 * @property list<'SHS'|'TEZ'|'YTS'>|null $PersistentAppUITypeList
 * @property string|null $PersistentAppUIStatus
 * @property string|null $AuthorId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastStateChangeReason
 * @property list<Tag>|null $Tags
 */
class PersistentAppUI extends Shape
{
    /**
     * @param array{
     *     PersistentAppUIId?: string|null,
     *     PersistentAppUITypeList?: list<'SHS'|'TEZ'|'YTS'>|null,
     *     PersistentAppUIStatus?: string|null,
     *     AuthorId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LastStateChangeReason?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
