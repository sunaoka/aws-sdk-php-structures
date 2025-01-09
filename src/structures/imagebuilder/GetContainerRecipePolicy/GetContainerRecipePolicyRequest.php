<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $containerRecipeArn
 */
class GetContainerRecipePolicyRequest extends Request
{
    /**
     * @param array{containerRecipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
