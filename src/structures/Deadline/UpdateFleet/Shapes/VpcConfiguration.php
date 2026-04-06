<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $resourceConfigurationArns
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{resourceConfigurationArns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
