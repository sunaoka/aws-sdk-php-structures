<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutImageRecipePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageRecipeArn
 * @property string $policy
 */
class PutImageRecipePolicyRequest extends Request
{
    /**
     * @param array{
     *     imageRecipeArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
