<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageRecipeArn
 */
class GetImageRecipePolicyRequest extends Request
{
    /**
     * @param array{imageRecipeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
