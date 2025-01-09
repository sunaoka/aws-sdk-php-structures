<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyHashCondition
 * @property string $ResourceArn
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyHashCondition?: string,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
