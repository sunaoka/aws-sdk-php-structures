<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateServiceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceActionSummary $ServiceActionSummary
 * @property array<'Name'|'Version'|'AssumeRole'|'Parameters', string> $Definition
 */
class ServiceActionDetail extends Shape
{
    /**
     * @param array{
     *     ServiceActionSummary?: ServiceActionSummary,
     *     Definition?: array<'Name'|'Version'|'AssumeRole'|'Parameters', string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
