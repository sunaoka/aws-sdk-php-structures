<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $baselineIdentifiers
 * @property list<string> $parentIdentifiers
 * @property list<string> $targetIdentifiers
 */
class EnabledBaselineFilter extends Shape
{
    /**
     * @param array{
     *     baselineIdentifiers?: list<string>,
     *     parentIdentifiers?: list<string>,
     *     targetIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
