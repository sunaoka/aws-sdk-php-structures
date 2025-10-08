<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplexProgram;

trait DescribeMultiplexProgramTrait
{
    /**
     * @param DescribeMultiplexProgramRequest $args
     * @return DescribeMultiplexProgramResponse
     */
    public function describeMultiplexProgram(DescribeMultiplexProgramRequest $args)
    {
        $result = parent::describeMultiplexProgram($args->toArray());
        return new DescribeMultiplexProgramResponse($result->toArray());
    }
}
