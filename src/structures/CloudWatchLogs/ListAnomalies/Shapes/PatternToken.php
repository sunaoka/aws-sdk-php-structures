<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $dynamicTokenPosition
 * @property bool $isDynamic
 * @property string $tokenString
 * @property array<string, int> $enumerations
 * @property string $inferredTokenName
 */
class PatternToken extends Shape
{
    /**
     * @param array{
     *     dynamicTokenPosition?: int,
     *     isDynamic?: bool,
     *     tokenString?: string,
     *     enumerations?: array<string, int>,
     *     inferredTokenName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
