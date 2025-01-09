<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\BatchDeleteRecipeVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property string $RecipeVersion
 */
class RecipeVersionErrorDetail extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     RecipeVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
