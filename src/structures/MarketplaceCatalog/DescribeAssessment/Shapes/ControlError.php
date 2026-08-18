<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 * @property list<ErrorScope>|null $Scope
 */
class ControlError extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null,
     *     Scope?: list<ErrorScope>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
