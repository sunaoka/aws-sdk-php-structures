<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null $cacheBehavior
 * @property string|null $cacheS3Uri
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $id
 * @property string|null $name
 * @property 'ACTIVE'|'DELETED'|'FAILED'|null $status
 */
class RunCacheListItem extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     cacheBehavior?: 'CACHE_ON_FAILURE'|'CACHE_ALWAYS'|null,
     *     cacheS3Uri?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     name?: string|null,
     *     status?: 'ACTIVE'|'DELETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
