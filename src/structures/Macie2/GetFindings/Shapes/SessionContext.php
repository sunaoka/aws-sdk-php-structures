<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionContextAttributes|null $attributes
 * @property SessionIssuer|null $sessionIssuer
 */
class SessionContext extends Shape
{
    /**
     * @param array{
     *     attributes?: SessionContextAttributes|null,
     *     sessionIssuer?: SessionIssuer|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
