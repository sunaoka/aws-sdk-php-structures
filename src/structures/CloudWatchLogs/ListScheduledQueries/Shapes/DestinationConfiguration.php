<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListScheduledQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Configuration|null $s3Configuration
 * @property LookupTableConfiguration|null $lookupTableConfiguration
 */
class DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     s3Configuration?: S3Configuration|null,
     *     lookupTableConfiguration?: LookupTableConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
