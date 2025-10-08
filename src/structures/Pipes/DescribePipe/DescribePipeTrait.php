<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe;

trait DescribePipeTrait
{
    /**
     * @param DescribePipeRequest $args
     * @return DescribePipeResponse
     */
    public function describePipe(DescribePipeRequest $args)
    {
        $result = parent::describePipe($args->toArray());
        return new DescribePipeResponse($result->toArray());
    }
}
