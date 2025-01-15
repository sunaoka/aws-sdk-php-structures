<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PolicyHashCondition
 * @property string|null $ResourceArn
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyHashCondition?: string|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
