<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property bool $isRequired
 * @property string $label
 * @property string $description
 * @property bool $isSensitiveField
 * @property list<string> $connectorSuppliedValues
 */
class AuthParameter extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     isRequired?: bool,
     *     label?: string,
     *     description?: string,
     *     isSensitiveField?: bool,
     *     connectorSuppliedValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
