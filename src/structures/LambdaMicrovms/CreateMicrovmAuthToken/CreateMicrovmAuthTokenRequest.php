<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmAuthToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $microvmIdentifier
 * @property int<1, max> $expirationInMinutes
 * @property list<Shapes\PortSpecification> $allowedPorts
 */
class CreateMicrovmAuthTokenRequest extends Request
{
    /**
     * @param array{
     *     microvmIdentifier: string,
     *     expirationInMinutes: int<1, max>,
     *     allowedPorts: list<Shapes\PortSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
