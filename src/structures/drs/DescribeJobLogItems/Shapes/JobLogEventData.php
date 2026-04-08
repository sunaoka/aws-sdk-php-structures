<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerID
 * @property string|null $conversionServerID
 * @property string|null $targetInstanceID
 * @property string|null $rawError
 * @property ConversionProperties|null $conversionProperties
 * @property EventResourceData|null $eventResourceData
 * @property int<0, 9>|null $attemptCount
 * @property int<0, 9>|null $maxAttemptsCount
 */
class JobLogEventData extends Shape
{
    /**
     * @param array{
     *     sourceServerID?: string|null,
     *     conversionServerID?: string|null,
     *     targetInstanceID?: string|null,
     *     rawError?: string|null,
     *     conversionProperties?: ConversionProperties|null,
     *     eventResourceData?: EventResourceData|null,
     *     attemptCount?: int<0, 9>|null,
     *     maxAttemptsCount?: int<0, 9>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
