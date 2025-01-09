<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $autoUpdateOutdatedInstancesRootDeploymentId
 * @property list<string> $autoUpdateOutdatedInstancesDeploymentIds
 */
class RelatedDeployments extends Shape
{
    /**
     * @param array{
     *     autoUpdateOutdatedInstancesRootDeploymentId?: string,
     *     autoUpdateOutdatedInstancesDeploymentIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
