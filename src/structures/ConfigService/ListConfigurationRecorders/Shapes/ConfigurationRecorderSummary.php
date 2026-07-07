<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConfigurationRecorders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string|null $servicePrincipal
 * @property 'INTERNAL'|'PAID' $recordingScope
 * @property 'AZURE'|null $provider
 */
class ConfigurationRecorderSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     servicePrincipal?: string|null,
     *     recordingScope: 'INTERNAL'|'PAID',
     *     provider?: 'AZURE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
