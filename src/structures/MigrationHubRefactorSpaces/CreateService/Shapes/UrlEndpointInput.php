<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HealthUrl
 * @property string $Url
 */
class UrlEndpointInput extends Shape
{
    /**
     * @param array{
     *     HealthUrl?: string|null,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
