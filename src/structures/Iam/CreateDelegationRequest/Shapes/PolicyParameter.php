<?php

namespace Sunaoka\Aws\Structures\Iam\CreateDelegationRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Values
 * @property 'string'|'stringList'|null $Type
 */
class PolicyParameter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Values?: list<string>|null,
     *     Type?: 'string'|'stringList'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
