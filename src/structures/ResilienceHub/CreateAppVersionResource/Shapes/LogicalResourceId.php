<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\CreateAppVersionResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eksSourceName
 * @property string $identifier
 * @property string $logicalStackName
 * @property string $resourceGroupName
 * @property string $terraformSourceName
 */
class LogicalResourceId extends Shape
{
    /**
     * @param array{
     *     eksSourceName?: string,
     *     identifier: string,
     *     logicalStackName?: string,
     *     resourceGroupName?: string,
     *     terraformSourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
