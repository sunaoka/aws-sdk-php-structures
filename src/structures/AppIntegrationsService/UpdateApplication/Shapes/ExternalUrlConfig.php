<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessUrl
 * @property list<string> $ApprovedOrigins
 */
class ExternalUrlConfig extends Shape
{
    /**
     * @param array{
     *     AccessUrl: string,
     *     ApprovedOrigins?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
