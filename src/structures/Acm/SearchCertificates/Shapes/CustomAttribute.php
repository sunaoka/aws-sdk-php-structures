<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectIdentifier
 * @property string|null $Value
 */
class CustomAttribute extends Shape
{
    /**
     * @param array{
     *     ObjectIdentifier?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
