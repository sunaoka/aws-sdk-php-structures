<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enable
 * @property bool|null $Rollback
 */
class AwsEcsServiceDeploymentConfigurationDeploymentCircuitBreakerDetails extends Shape
{
    /**
     * @param array{
     *     Enable?: bool|null,
     *     Rollback?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
