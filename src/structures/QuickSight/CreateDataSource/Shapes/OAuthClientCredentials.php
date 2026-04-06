<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientId
 * @property string|null $ClientSecret
 * @property string|null $Username
 */
class OAuthClientCredentials extends Shape
{
    /**
     * @param array{
     *     ClientId?: string|null,
     *     ClientSecret?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
