<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeVodSource;

trait DescribeVodSourceTrait
{
    /**
     * @param DescribeVodSourceRequest $args
     * @return DescribeVodSourceResponse
     */
    public function describeVodSource(DescribeVodSourceRequest $args)
    {
        $result = parent::describeVodSource($args->toArray());
        return new DescribeVodSourceResponse($result->toArray());
    }
}
