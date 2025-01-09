<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $destination
 * @property string $fieldDelimiter
 * @property string $keyValueDelimiter
 * @property string $keyPrefix
 * @property string $nonMatchValue
 * @property bool $overwriteIfExists
 */
class ParseKeyValue extends Shape
{
    /**
     * @param array{
     *     source?: string,
     *     destination?: string,
     *     fieldDelimiter?: string,
     *     keyValueDelimiter?: string,
     *     keyPrefix?: string,
     *     nonMatchValue?: string,
     *     overwriteIfExists?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
