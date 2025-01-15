<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $functionName
 * @property string|null $functionAlias
 * @property string|null $currentVersion
 * @property string|null $targetVersion
 * @property double|null $targetVersionWeight
 */
class LambdaFunctionInfo extends Shape
{
    /**
     * @param array{
     *     functionName?: string|null,
     *     functionAlias?: string|null,
     *     currentVersion?: string|null,
     *     targetVersion?: string|null,
     *     targetVersionWeight?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
