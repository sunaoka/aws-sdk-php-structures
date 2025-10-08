<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFaq;

trait DescribeFaqTrait
{
    /**
     * @param DescribeFaqRequest $args
     * @return DescribeFaqResponse
     */
    public function describeFaq(DescribeFaqRequest $args)
    {
        $result = parent::describeFaq($args->toArray());
        return new DescribeFaqResponse($result->toArray());
    }
}
