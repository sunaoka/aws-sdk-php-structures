<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableLocation
 * @property string $ConnectionName
 * @property list<string> $UpsertKeys
 */
class UpsertRedshiftTargetOptions extends Shape
{
    /**
     * @param array{
     *     TableLocation?: string,
     *     ConnectionName?: string,
     *     UpsertKeys?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
