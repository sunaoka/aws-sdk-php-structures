<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ApplyToAllRegions
 * @property list<AdvancedEventSelector>|null $AdvancedEventSelectors
 */
class SourceConfig extends Shape
{
    /**
     * @param array{
     *     ApplyToAllRegions?: bool|null,
     *     AdvancedEventSelectors?: list<AdvancedEventSelector>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
