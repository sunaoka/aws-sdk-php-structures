<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Event
 * @property string|null $Description
 */
class Subscription extends Shape
{
    /**
     * @param array{
     *     Event: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
