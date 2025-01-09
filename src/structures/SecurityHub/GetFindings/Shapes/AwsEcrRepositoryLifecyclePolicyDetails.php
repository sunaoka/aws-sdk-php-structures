<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LifecyclePolicyText
 * @property string $RegistryId
 */
class AwsEcrRepositoryLifecyclePolicyDetails extends Shape
{
    /**
     * @param array{
     *     LifecyclePolicyText?: string,
     *     RegistryId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
