<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $UserAttributes
 * @property string $UserId
 */
class EndpointUser extends Shape
{
    /**
     * @param array{
     *     UserAttributes?: array<string, list<string>>,
     *     UserId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
