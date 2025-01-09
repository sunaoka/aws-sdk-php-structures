<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultAuthorizerName
 * @property bool $allowAuthorizerOverride
 */
class AuthorizerConfig extends Shape
{
    /**
     * @param array{
     *     defaultAuthorizerName?: string,
     *     allowAuthorizerOverride?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
