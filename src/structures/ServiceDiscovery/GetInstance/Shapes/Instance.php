<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CreatorRequestId
 * @property array<string, string> $Attributes
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CreatorRequestId?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
