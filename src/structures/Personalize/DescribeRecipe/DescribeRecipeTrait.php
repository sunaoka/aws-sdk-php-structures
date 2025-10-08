<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecipe;

trait DescribeRecipeTrait
{
    /**
     * @param DescribeRecipeRequest $args
     * @return DescribeRecipeResponse
     */
    public function describeRecipe(DescribeRecipeRequest $args)
    {
        $result = parent::describeRecipe($args->toArray());
        return new DescribeRecipeResponse($result->toArray());
    }
}
