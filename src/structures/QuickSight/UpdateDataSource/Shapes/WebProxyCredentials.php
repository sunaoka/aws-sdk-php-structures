<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebProxyUsername
 * @property string $WebProxyPassword
 */
class WebProxyCredentials extends Shape
{
    /**
     * @param array{
     *     WebProxyUsername: string,
     *     WebProxyPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
