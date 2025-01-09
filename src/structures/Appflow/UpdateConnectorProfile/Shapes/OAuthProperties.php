<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tokenUrl
 * @property string $authCodeUrl
 * @property list<string> $oAuthScopes
 */
class OAuthProperties extends Shape
{
    /**
     * @param array{
     *     tokenUrl: string,
     *     authCodeUrl: string,
     *     oAuthScopes: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
