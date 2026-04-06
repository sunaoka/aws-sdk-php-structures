<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CustomImage>|null $CustomImages
 * @property list<string>|null $LifecycleConfigArns
 * @property list<CodeRepository>|null $CodeRepositories
 * @property EmrSettings|null $EmrSettings
 */
class JupyterLabAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CustomImages?: list<CustomImage>|null,
     *     LifecycleConfigArns?: list<string>|null,
     *     CodeRepositories?: list<CodeRepository>|null,
     *     EmrSettings?: EmrSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
