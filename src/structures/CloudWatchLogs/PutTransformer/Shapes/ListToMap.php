<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $key
 * @property string|null $valueKey
 * @property string|null $target
 * @property bool|null $flatten
 * @property 'first'|'last'|null $flattenedElement
 */
class ListToMap extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     key: string,
     *     valueKey?: string|null,
     *     target?: string|null,
     *     flatten?: bool|null,
     *     flattenedElement?: 'first'|'last'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
