<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHealthCheckSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CallerReference
 * @property Shapes\HealthCheckSourceConfig $HealthCheckSourceConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHealthCheckSourceRequest extends Request
{
    /**
     * @param array{
     *     CallerReference?: string|null,
     *     HealthCheckSourceConfig: Shapes\HealthCheckSourceConfig,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
