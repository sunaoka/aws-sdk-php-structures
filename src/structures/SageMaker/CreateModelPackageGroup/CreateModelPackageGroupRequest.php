<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 * @property string $ModelPackageGroupDescription
 * @property list<Shapes\Tag> $Tags
 */
class CreateModelPackageGroupRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageGroupName: string,
     *     ModelPackageGroupDescription?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
