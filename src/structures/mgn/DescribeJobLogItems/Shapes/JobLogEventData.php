<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $conversionServerID
 * @property string $rawError
 * @property string $sourceServerID
 * @property string $targetInstanceID
 */
class JobLogEventData extends Shape
{
    /**
     * @param array{
     *     conversionServerID?: string,
     *     rawError?: string,
     *     sourceServerID?: string,
     *     targetInstanceID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
