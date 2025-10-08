<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLoa;

trait DescribeLoaTrait
{
    /**
     * @param DescribeLoaRequest $args
     * @return DescribeLoaResponse
     */
    public function describeLoa(DescribeLoaRequest $args)
    {
        $result = parent::describeLoa($args->toArray());
        return new DescribeLoaResponse($result->toArray());
    }
}
