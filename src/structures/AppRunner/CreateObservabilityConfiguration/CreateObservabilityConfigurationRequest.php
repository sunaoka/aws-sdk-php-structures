<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateObservabilityConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ObservabilityConfigurationName
 * @property Shapes\TraceConfiguration|null $TraceConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateObservabilityConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ObservabilityConfigurationName: string,
     *     TraceConfiguration?: Shapes\TraceConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
