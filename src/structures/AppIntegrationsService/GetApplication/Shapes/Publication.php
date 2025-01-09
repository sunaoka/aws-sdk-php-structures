<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Event
 * @property string $Schema
 * @property string $Description
 */
class Publication extends Shape
{
    /**
     * @param array{
     *     Event: string,
     *     Schema: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
