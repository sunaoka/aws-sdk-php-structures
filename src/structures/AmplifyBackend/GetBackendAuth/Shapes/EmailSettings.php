<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EmailMessage
 * @property string $EmailSubject
 */
class EmailSettings extends Shape
{
    /**
     * @param array{
     *     EmailMessage?: string,
     *     EmailSubject?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
