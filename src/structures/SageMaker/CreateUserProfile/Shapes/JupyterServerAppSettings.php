<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec $DefaultResourceSpec
 * @property list<string> $LifecycleConfigArns
 * @property list<CodeRepository> $CodeRepositories
 */
class JupyterServerAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec,
     *     LifecycleConfigArns?: list<string>,
     *     CodeRepositories?: list<CodeRepository>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
