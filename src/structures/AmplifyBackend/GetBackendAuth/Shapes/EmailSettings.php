<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EmailMessage
 * @property string|null $EmailSubject
 */
class EmailSettings extends Shape
{
    /**
     * @param array{
     *     EmailMessage?: string|null,
     *     EmailSubject?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
