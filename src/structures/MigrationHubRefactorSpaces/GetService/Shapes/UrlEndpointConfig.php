<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HealthUrl
 * @property string $Url
 */
class UrlEndpointConfig extends Shape
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
