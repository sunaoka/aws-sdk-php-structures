<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases;

trait DescribeCasesTrait
{
    /**
     * @param DescribeCasesRequest $args
     * @return DescribeCasesResponse
     */
    public function describeCases(DescribeCasesRequest $args)
    {
        $result = parent::describeCases($args->toArray());
        return new DescribeCasesResponse($result->toArray());
    }
}
