<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 * @property string $targetFormat
 * @property list<string> $matchPatterns
 * @property string $sourceTimezone
 * @property string $targetTimezone
 * @property string $locale
 */
class DateTimeConverter extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string,
     *     targetFormat?: string,
     *     matchPatterns: list<string>,
     *     sourceTimezone?: string,
     *     targetTimezone?: string,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
