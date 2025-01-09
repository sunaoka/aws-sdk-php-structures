<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property 'Equal'|'NotEqual'|'BeginWith'|'LessThan'|'GreaterThan'|'Exists' $Type
 */
class OpsFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Values: list<string>,
     *     Type?: 'Equal'|'NotEqual'|'BeginWith'|'LessThan'|'GreaterThan'|'Exists'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
