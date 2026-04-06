<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CodeRepository>|null $CodeRepositories
 */
class SpaceJupyterLabAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CodeRepositories?: list<CodeRepository>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
