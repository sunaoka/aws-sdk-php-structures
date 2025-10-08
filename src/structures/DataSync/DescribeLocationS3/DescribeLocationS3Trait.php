<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationS3;

trait DescribeLocationS3Trait
{
    /**
     * @param DescribeLocationS3Request $args
     * @return DescribeLocationS3Response
     */
    public function describeLocationS3(DescribeLocationS3Request $args)
    {
        $result = parent::describeLocationS3($args->toArray());
        return new DescribeLocationS3Response($result->toArray());
    }
}
