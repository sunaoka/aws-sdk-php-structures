<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\BatchDeleteRecipeVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property string|null $RecipeVersion
 */
class RecipeVersionErrorDetail extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null,
     *     RecipeVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
