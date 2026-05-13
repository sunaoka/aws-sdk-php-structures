<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 * @property string|null $ModelPackageGroupDescription
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ManagedConfiguration|null $ManagedConfiguration
 */
class CreateModelPackageGroupRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageGroupName: string,
     *     ModelPackageGroupDescription?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ManagedConfiguration?: Shapes\ManagedConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
