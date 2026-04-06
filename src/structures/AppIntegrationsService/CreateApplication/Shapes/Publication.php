<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Event
 * @property string $Schema
 * @property string|null $Description
 */
class Publication extends Shape
{
    /**
     * @param array{
     *     Event: string,
     *     Schema: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
