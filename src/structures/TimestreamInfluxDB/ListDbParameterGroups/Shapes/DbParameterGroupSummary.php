<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\ListDbParameterGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string|null $description
 */
class DbParameterGroupSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     arn: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
