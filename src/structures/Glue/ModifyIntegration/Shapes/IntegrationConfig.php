<?php

namespace Sunaoka\Aws\Structures\Glue\ModifyIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RefreshInterval
 * @property array<string, string>|null $SourceProperties
 * @property bool|null $ContinuousSync
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{
     *     RefreshInterval?: string|null,
     *     SourceProperties?: array<string, string>|null,
     *     ContinuousSync?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
