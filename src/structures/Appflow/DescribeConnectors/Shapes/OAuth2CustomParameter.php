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
 * @property 'TOKEN_URL'|'AUTH_URL' $type
 */
class OAuth2CustomParameter extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     isRequired?: bool,
     *     label?: string,
     *     description?: string,
     *     isSensitiveField?: bool,
     *     connectorSuppliedValues?: list<string>,
     *     type?: 'TOKEN_URL'|'AUTH_URL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
