<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enable
 * @property bool $Rollback
 */
class AwsEcsServiceDeploymentConfigurationDeploymentCircuitBreakerDetails extends Shape
{
    /**
     * @param array{
     *     Enable?: bool,
     *     Rollback?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
