<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $conversionServerID
 * @property string|null $rawError
 * @property string|null $sourceServerID
 * @property string|null $targetInstanceID
 */
class JobLogEventData extends Shape
{
    /**
     * @param array{
     *     conversionServerID?: string|null,
     *     rawError?: string|null,
     *     sourceServerID?: string|null,
     *     targetInstanceID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
