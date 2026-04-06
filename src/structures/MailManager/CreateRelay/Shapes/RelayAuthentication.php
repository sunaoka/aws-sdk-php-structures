<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRelay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NoAuthentication|null $NoAuthentication
 * @property string|null $SecretArn
 */
class RelayAuthentication extends Shape
{
    /**
     * @param array{
     *     NoAuthentication?: NoAuthentication|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
