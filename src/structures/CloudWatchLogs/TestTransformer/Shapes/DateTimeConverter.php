<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 * @property string|null $targetFormat
 * @property list<string> $matchPatterns
 * @property string|null $sourceTimezone
 * @property string|null $targetTimezone
 * @property string|null $locale
 */
class DateTimeConverter extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string,
     *     targetFormat?: string|null,
     *     matchPatterns: list<string>,
     *     sourceTimezone?: string|null,
     *     targetTimezone?: string|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
