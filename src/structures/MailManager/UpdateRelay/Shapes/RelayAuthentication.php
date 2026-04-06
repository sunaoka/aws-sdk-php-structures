<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRelay\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 * @property NoAuthentication|null $NoAuthentication
 */
class RelayAuthentication extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string|null,
     *     NoAuthentication?: NoAuthentication|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
