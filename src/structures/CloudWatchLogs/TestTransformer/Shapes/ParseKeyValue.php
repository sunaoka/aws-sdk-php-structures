<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $source
 * @property string|null $destination
 * @property string|null $fieldDelimiter
 * @property string|null $keyValueDelimiter
 * @property string|null $keyPrefix
 * @property string|null $nonMatchValue
 * @property bool|null $overwriteIfExists
 */
class ParseKeyValue extends Shape
{
    /**
     * @param array{
     *     source?: string|null,
     *     destination?: string|null,
     *     fieldDelimiter?: string|null,
     *     keyValueDelimiter?: string|null,
     *     keyPrefix?: string|null,
     *     nonMatchValue?: string|null,
     *     overwriteIfExists?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
