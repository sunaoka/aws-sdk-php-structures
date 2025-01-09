<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemInstanceSummary $summary
 * @property DefinitionDocument $definition
 * @property string $s3BucketName
 * @property MetricsConfiguration $metricsConfiguration
 * @property int $validatedNamespaceVersion
 * @property list<DependencyRevision> $validatedDependencyRevisions
 * @property string $flowActionsRoleArn
 */
class SystemInstanceDescription extends Shape
{
    /**
     * @param array{
     *     summary?: SystemInstanceSummary,
     *     definition?: DefinitionDocument,
     *     s3BucketName?: string,
     *     metricsConfiguration?: MetricsConfiguration,
     *     validatedNamespaceVersion?: int,
     *     validatedDependencyRevisions?: list<DependencyRevision>,
     *     flowActionsRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
