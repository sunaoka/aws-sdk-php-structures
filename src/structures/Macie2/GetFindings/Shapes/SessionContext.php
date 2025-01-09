<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionContextAttributes $attributes
 * @property SessionIssuer $sessionIssuer
 */
class SessionContext extends Shape
{
    /**
     * @param array{
     *     attributes?: SessionContextAttributes,
     *     sessionIssuer?: SessionIssuer
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
