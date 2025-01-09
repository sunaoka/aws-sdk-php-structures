<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeDirectoryConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountName
 * @property string $AccountPassword
 */
class ServiceAccountCredentials extends Shape
{
    /**
     * @param array{
     *     AccountName: string,
     *     AccountPassword: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
