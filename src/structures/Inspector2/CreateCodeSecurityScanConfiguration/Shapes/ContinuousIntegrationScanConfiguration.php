<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PULL_REQUEST'|'PUSH'> $supportedEvents
 */
class ContinuousIntegrationScanConfiguration extends Shape
{
    /**
     * @param array{supportedEvents: list<'PULL_REQUEST'|'PUSH'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
