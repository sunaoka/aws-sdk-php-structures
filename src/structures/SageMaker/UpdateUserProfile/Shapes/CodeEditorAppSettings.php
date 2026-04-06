<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property list<CustomImage>|null $CustomImages
 * @property list<string>|null $LifecycleConfigArns
 * @property AppLifecycleManagement|null $AppLifecycleManagement
 * @property string|null $BuiltInLifecycleConfigArn
 */
class CodeEditorAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     CustomImages?: list<CustomImage>|null,
     *     LifecycleConfigArns?: list<string>|null,
     *     AppLifecycleManagement?: AppLifecycleManagement|null,
     *     BuiltInLifecycleConfigArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
