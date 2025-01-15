<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eksSourceName
 * @property string $identifier
 * @property string|null $logicalStackName
 * @property string|null $resourceGroupName
 * @property string|null $terraformSourceName
 */
class LogicalResourceId extends Shape
{
    /**
     * @param array{
     *     eksSourceName?: string|null,
     *     identifier: string,
     *     logicalStackName?: string|null,
     *     resourceGroupName?: string|null,
     *     terraformSourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
