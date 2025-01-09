<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutContainerRecipePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $containerRecipeArn
 * @property string $policy
 */
class PutContainerRecipePolicyRequest extends Request
{
    /**
     * @param array{
     *     containerRecipeArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
