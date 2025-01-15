<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<string>|null $LifecycleConfigArns
 * @property list<CodeRepository>|null $CodeRepositories
 */
class JupyterServerAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     LifecycleConfigArns?: list<string>|null,
     *     CodeRepositories?: list<CodeRepository>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
