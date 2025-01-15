<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversionProperties|null $conversionProperties
 * @property string|null $conversionServerID
 * @property EventResourceData|null $eventResourceData
 * @property string|null $rawError
 * @property string|null $sourceServerID
 * @property string|null $targetInstanceID
 */
class JobLogEventData extends Shape
{
    /**
     * @param array{
     *     conversionProperties?: ConversionProperties|null,
     *     conversionServerID?: string|null,
     *     eventResourceData?: EventResourceData|null,
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
