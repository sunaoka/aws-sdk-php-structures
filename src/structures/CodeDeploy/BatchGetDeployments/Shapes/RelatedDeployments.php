<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $autoUpdateOutdatedInstancesRootDeploymentId
 * @property list<string>|null $autoUpdateOutdatedInstancesDeploymentIds
 */
class RelatedDeployments extends Shape
{
    /**
     * @param array{
     *     autoUpdateOutdatedInstancesRootDeploymentId?: string|null,
     *     autoUpdateOutdatedInstancesDeploymentIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
