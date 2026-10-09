<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableCrossNamespace
 * @property list<string>|null $disabledServices
 */
class UpdateAckConfig extends Shape
{
    /**
     * @param array{
     *     enableCrossNamespace?: bool|null,
     *     disabledServices?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
