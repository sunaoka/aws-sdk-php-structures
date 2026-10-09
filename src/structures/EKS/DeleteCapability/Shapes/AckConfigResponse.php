<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableCrossNamespace
 * @property list<string>|null $disabledServices
 */
class AckConfigResponse extends Shape
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
