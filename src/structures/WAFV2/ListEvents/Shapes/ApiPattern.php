<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Method
 * @property string|null $PathPattern
 * @property int<0, 65535>|null $Port
 * @property list<string>|null $Domains
 */
class ApiPattern extends Shape
{
    /**
     * @param array{
     *     Method?: string|null,
     *     PathPattern?: string|null,
     *     Port?: int<0, 65535>|null,
     *     Domains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
