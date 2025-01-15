<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAPIKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $TokenDomains
 * @property string|null $APIKey
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property int<0, max>|null $Version
 */
class APIKeySummary extends Shape
{
    /**
     * @param array{
     *     TokenDomains?: list<string>|null,
     *     APIKey?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Version?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
