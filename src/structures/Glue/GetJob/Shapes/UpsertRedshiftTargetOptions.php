<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableLocation
 * @property string|null $ConnectionName
 * @property list<string>|null $UpsertKeys
 */
class UpsertRedshiftTargetOptions extends Shape
{
    /**
     * @param array{
     *     TableLocation?: string|null,
     *     ConnectionName?: string|null,
     *     UpsertKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
