<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRelay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoAuthentication $NoAuthentication
 * @property string $SecretArn
 */
class RelayAuthentication extends Shape
{
    /**
     * @param array{
     *     NoAuthentication?: NoAuthentication,
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
