<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS' $cacheBehavior
 * @property string $cacheS3Uri
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $id
 * @property string $name
 * @property 'ACTIVE'|'DELETED'|'FAILED' $status
 */
class RunCacheListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS',
     *     cacheS3Uri?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     name?: string,
     *     status?: 'ACTIVE'|'DELETED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
