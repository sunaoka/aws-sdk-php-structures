<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHARED'|'ISOLATED_SANDBOX'|'CONFIDENTIAL_SANDBOX' $isolationMode
 * @property string|null $attestationPolicy
 */
class TrustedExecutionConfiguration extends Shape
{
    /**
     * @param array{
     *     isolationMode: 'SHARED'|'ISOLATED_SANDBOX'|'CONFIDENTIAL_SANDBOX',
     *     attestationPolicy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
