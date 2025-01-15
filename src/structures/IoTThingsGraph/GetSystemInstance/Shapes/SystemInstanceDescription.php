<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemInstanceSummary|null $summary
 * @property DefinitionDocument|null $definition
 * @property string|null $s3BucketName
 * @property MetricsConfiguration|null $metricsConfiguration
 * @property int|null $validatedNamespaceVersion
 * @property list<DependencyRevision>|null $validatedDependencyRevisions
 * @property string|null $flowActionsRoleArn
 */
class SystemInstanceDescription extends Shape
{
    /**
     * @param array{
     *     summary?: SystemInstanceSummary|null,
     *     definition?: DefinitionDocument|null,
     *     s3BucketName?: string|null,
     *     metricsConfiguration?: MetricsConfiguration|null,
     *     validatedNamespaceVersion?: int|null,
     *     validatedDependencyRevisions?: list<DependencyRevision>|null,
     *     flowActionsRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
