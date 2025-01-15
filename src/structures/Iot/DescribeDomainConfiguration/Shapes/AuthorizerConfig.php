<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultAuthorizerName
 * @property bool|null $allowAuthorizerOverride
 */
class AuthorizerConfig extends Shape
{
    /**
     * @param array{
     *     defaultAuthorizerName?: string|null,
     *     allowAuthorizerOverride?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
