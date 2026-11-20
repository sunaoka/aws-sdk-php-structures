<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthChecksBySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HealthCheckSourceId
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListHealthChecksBySourceRequest extends Request
{
    /**
     * @param array{
     *     HealthCheckSourceId: string,
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
