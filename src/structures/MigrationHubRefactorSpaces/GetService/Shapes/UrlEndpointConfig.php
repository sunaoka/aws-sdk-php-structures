<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HealthUrl
 * @property string|null $Url
 */
class UrlEndpointConfig extends Shape
{
    /**
     * @param array{
     *     HealthUrl?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
