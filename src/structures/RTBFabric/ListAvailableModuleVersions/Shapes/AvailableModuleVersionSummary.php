<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModuleVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 * @property string $moduleVersionArn
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DEPRECATED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class AvailableModuleVersionSummary extends Shape
{
    /**
     * @param array{
     *     version: string,
     *     moduleVersionArn: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DEPRECATED',
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
