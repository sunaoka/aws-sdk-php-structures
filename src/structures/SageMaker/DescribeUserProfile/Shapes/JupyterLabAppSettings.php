<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec $DefaultResourceSpec
 * @property list<CustomImage> $CustomImages
 * @property list<string> $LifecycleConfigArns
 * @property list<CodeRepository> $CodeRepositories
 * @property AppLifecycleManagement $AppLifecycleManagement
 * @property EmrSettings $EmrSettings
 * @property string $BuiltInLifecycleConfigArn
 */
class JupyterLabAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec,
     *     CustomImages?: list<CustomImage>,
     *     LifecycleConfigArns?: list<string>,
     *     CodeRepositories?: list<CodeRepository>,
     *     AppLifecycleManagement?: AppLifecycleManagement,
     *     EmrSettings?: EmrSettings,
     *     BuiltInLifecycleConfigArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
