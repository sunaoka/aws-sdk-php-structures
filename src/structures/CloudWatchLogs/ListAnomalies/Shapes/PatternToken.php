<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $dynamicTokenPosition
 * @property bool|null $isDynamic
 * @property string|null $tokenString
 * @property array<string, int>|null $enumerations
 * @property string|null $inferredTokenName
 */
class PatternToken extends Shape
{
    /**
     * @param array{
     *     dynamicTokenPosition?: int|null,
     *     isDynamic?: bool|null,
     *     tokenString?: string|null,
     *     enumerations?: array<string, int>|null,
     *     inferredTokenName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
