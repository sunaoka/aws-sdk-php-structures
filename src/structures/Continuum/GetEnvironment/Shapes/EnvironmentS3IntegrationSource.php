<?php

namespace Sunaoka\Aws\Structures\Continuum\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string|null $codePrefix
 * @property string|null $contextPrefix
 */
class EnvironmentS3IntegrationSource extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     codePrefix?: string|null,
     *     contextPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
