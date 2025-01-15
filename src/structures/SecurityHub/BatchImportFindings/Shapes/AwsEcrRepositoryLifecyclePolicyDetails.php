<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LifecyclePolicyText
 * @property string|null $RegistryId
 */
class AwsEcrRepositoryLifecyclePolicyDetails extends Shape
{
    /**
     * @param array{
     *     LifecyclePolicyText?: string|null,
     *     RegistryId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
