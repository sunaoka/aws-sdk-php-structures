<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|null $AccessType
 * @property string|null $AttributeName
 * @property list<string>|null $Values
 */
class PrimaryAttributeValue extends Shape
{
    /**
     * @param array{
     *     AccessType?: 'ALLOW'|null,
     *     AttributeName?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
