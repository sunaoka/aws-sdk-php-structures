<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageName
 */
class DeleteModelPackageRequest extends Request
{
    /**
     * @param array{ModelPackageName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
