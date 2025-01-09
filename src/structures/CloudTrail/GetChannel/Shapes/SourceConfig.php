<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ApplyToAllRegions
 * @property list<AdvancedEventSelector> $AdvancedEventSelectors
 */
class SourceConfig extends Shape
{
    /**
     * @param array{
     *     ApplyToAllRegions?: bool,
     *     AdvancedEventSelectors?: list<AdvancedEventSelector>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
