<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec $DefaultResourceSpec
 * @property list<CodeRepository> $CodeRepositories
 * @property SpaceAppLifecycleManagement $AppLifecycleManagement
 */
class SpaceJupyterLabAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec,
     *     CodeRepositories?: list<CodeRepository>,
     *     AppLifecycleManagement?: SpaceAppLifecycleManagement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
