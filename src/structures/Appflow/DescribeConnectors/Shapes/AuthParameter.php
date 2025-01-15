<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property bool|null $isRequired
 * @property string|null $label
 * @property string|null $description
 * @property bool|null $isSensitiveField
 * @property list<string>|null $connectorSuppliedValues
 */
class AuthParameter extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     isRequired?: bool|null,
     *     label?: string|null,
     *     description?: string|null,
     *     isSensitiveField?: bool|null,
     *     connectorSuppliedValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
