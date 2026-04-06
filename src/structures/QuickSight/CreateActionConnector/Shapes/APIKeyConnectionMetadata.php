<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseEndpoint
 * @property string $ApiKey
 * @property string|null $Email
 */
class APIKeyConnectionMetadata extends Shape
{
    /**
     * @param array{
     *     BaseEndpoint: string,
     *     ApiKey: string,
     *     Email?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
