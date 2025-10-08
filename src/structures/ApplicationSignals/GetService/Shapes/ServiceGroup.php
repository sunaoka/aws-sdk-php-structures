<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $GroupValue
 * @property string $GroupSource
 * @property string $GroupIdentifier
 */
class ServiceGroup extends Shape
{
    /**
     * @param array{
     *     GroupName: string,
     *     GroupValue: string,
     *     GroupSource: string,
     *     GroupIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
