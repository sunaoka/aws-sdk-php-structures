<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAPIKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $TokenDomains
 * @property string $APIKey
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property int<0, max> $Version
 */
class APIKeySummary extends Shape
{
    /**
     * @param array{
     *     TokenDomains?: list<string>,
     *     APIKey?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     Version?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
