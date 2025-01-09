<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SendVia
 * @property list<string> $SendTo
 */
class ServiceInsertionSegments extends Shape
{
    /**
     * @param array{
     *     SendVia?: list<string>,
     *     SendTo?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
