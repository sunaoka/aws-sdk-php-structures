<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdminAccountEmail
 * @property string $ServiceAccountPrivateKey
 * @property string $ClientEmail
 */
class ServiceAccountCredentials extends Shape
{
    /**
     * @param array{
     *     AdminAccountEmail: string,
     *     ServiceAccountPrivateKey: string,
     *     ClientEmail: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
