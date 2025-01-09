<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateObservabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObservabilityConfigurationName
 * @property Shapes\TraceConfiguration $TraceConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateObservabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ObservabilityConfigurationName: string,
     *     TraceConfiguration?: Shapes\TraceConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
