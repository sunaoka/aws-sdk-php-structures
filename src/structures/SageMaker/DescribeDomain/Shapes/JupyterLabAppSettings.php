<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CustomImage>|null $CustomImages
 * @property list<string>|null $LifecycleConfigArns
 * @property list<CodeRepository>|null $CodeRepositories
 * @property AppLifecycleManagement|null $AppLifecycleManagement
 * @property EmrSettings|null $EmrSettings
 * @property string|null $BuiltInLifecycleConfigArn
 */
class JupyterLabAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CustomImages?: list<CustomImage>|null,
     *     LifecycleConfigArns?: list<string>|null,
     *     CodeRepositories?: list<CodeRepository>|null,
     *     AppLifecycleManagement?: AppLifecycleManagement|null,
     *     EmrSettings?: EmrSettings|null,
     *     BuiltInLifecycleConfigArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
