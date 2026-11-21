<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_ARN'|'HOST'|'METHOD'|'PATH'|'PORT'|'ACCOUNT' $key
 * @property list<string> $values
 */
class RuleFilter extends Shape
{
    /**
     * @param array{
     *     key: 'RESOURCE_ARN'|'HOST'|'METHOD'|'PATH'|'PORT'|'ACCOUNT',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
