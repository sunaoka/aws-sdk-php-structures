<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateRLSPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $FilterExpression
 */
class UpdateRLSPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     FilterExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
