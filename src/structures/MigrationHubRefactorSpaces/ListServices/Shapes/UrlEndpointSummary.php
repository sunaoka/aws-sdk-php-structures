<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HealthUrl
 * @property string $Url
 */
class UrlEndpointSummary extends Shape
{
    /**
     * @param array{
     *     HealthUrl?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
