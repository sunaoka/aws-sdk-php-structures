<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SendVia
 * @property list<string>|null $SendTo
 */
class ServiceInsertionSegments extends Shape
{
    /**
     * @param array{
     *     SendVia?: list<string>|null,
     *     SendTo?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
