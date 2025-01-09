<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionName
 * @property string $functionAlias
 * @property string $currentVersion
 * @property string $targetVersion
 * @property double $targetVersionWeight
 */
class LambdaFunctionInfo extends Shape
{
    /**
     * @param array{
     *     functionName?: string,
     *     functionAlias?: string,
     *     currentVersion?: string,
     *     targetVersion?: string,
     *     targetVersionWeight?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
