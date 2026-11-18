<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetrySetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileName
 * @property string $Content
 * @property 'BICEP' $Format
 * @property string|null $ContentType
 */
class SetupArtifact extends Shape
{
    /**
     * @param array{
     *     FileName: string,
     *     Content: string,
     *     Format: 'BICEP',
     *     ContentType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
