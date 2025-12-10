<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerID
 * @property string|null $conversionServerID
 * @property string|null $targetInstanceID
 * @property string|null $rawError
 * @property int<1, max>|null $attemptCount
 * @property int<1, max>|null $maxAttemptsCount
 */
class JobLogEventData extends Shape
{
    /**
     * @param array{
     *     sourceServerID?: string|null,
     *     conversionServerID?: string|null,
     *     targetInstanceID?: string|null,
     *     rawError?: string|null,
     *     attemptCount?: int<1, max>|null,
     *     maxAttemptsCount?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
