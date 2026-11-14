<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InvalidConfiguration'|'ConfigurationConflict'|'AccessDenied'|'ResourceNotFound'|'DependencyUnreachable'|'ExtensionUnhealthy'|'InternalFailure'|'Other' $Code
 * @property string $Message
 * @property int<0, max> $NodeCount
 */
class ExtensionHealthIssue extends Shape
{
    /**
     * @param array{
     *     Code: 'InvalidConfiguration'|'ConfigurationConflict'|'AccessDenied'|'ResourceNotFound'|'DependencyUnreachable'|'ExtensionUnhealthy'|'InternalFailure'|'Other',
     *     Message: string,
     *     NodeCount: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
