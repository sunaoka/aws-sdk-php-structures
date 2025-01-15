<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateServiceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceActionSummary|null $ServiceActionSummary
 * @property array<'Name'|'Version'|'AssumeRole'|'Parameters', string>|null $Definition
 */
class ServiceActionDetail extends Shape
{
    /**
     * @param array{
     *     ServiceActionSummary?: ServiceActionSummary|null,
     *     Definition?: array<'Name'|'Version'|'AssumeRole'|'Parameters', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
