<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledBaselines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $baselineIdentifiers
 * @property list<string>|null $parentIdentifiers
 * @property list<string>|null $targetIdentifiers
 */
class EnabledBaselineFilter extends Shape
{
    /**
     * @param array{
     *     baselineIdentifiers?: list<string>|null,
     *     parentIdentifiers?: list<string>|null,
     *     targetIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
