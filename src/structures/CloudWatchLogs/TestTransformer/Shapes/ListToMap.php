<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $key
 * @property string $valueKey
 * @property string $target
 * @property bool $flatten
 * @property 'first'|'last' $flattenedElement
 */
class ListToMap extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     key: string,
     *     valueKey?: string,
     *     target?: string,
     *     flatten?: bool,
     *     flattenedElement?: 'first'|'last'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
