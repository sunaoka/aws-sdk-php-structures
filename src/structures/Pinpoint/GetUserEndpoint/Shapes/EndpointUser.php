<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $UserAttributes
 * @property string|null $UserId
 */
class EndpointUser extends Shape
{
    /**
     * @param array{
     *     UserAttributes?: array<string, list<string>>|null,
     *     UserId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
