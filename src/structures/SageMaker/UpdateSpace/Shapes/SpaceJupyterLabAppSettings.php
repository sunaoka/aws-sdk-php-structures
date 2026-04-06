<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CodeRepository>|null $CodeRepositories
 * @property SpaceAppLifecycleManagement|null $AppLifecycleManagement
 */
class SpaceJupyterLabAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CodeRepositories?: list<CodeRepository>|null,
     *     AppLifecycleManagement?: SpaceAppLifecycleManagement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
