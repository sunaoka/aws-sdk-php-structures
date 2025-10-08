<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeProgram;

trait DescribeProgramTrait
{
    /**
     * @param DescribeProgramRequest $args
     * @return DescribeProgramResponse
     */
    public function describeProgram(DescribeProgramRequest $args)
    {
        $result = parent::describeProgram($args->toArray());
        return new DescribeProgramResponse($result->toArray());
    }
}
