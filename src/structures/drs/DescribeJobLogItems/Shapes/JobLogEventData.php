<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversionProperties $conversionProperties
 * @property string $conversionServerID
 * @property EventResourceData $eventResourceData
 * @property string $rawError
 * @property string $sourceServerID
 * @property string $targetInstanceID
 */
class JobLogEventData extends Shape
{
    /**
     * @param array{
     *     conversionProperties?: ConversionProperties,
     *     conversionServerID?: string,
     *     eventResourceData?: EventResourceData,
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
