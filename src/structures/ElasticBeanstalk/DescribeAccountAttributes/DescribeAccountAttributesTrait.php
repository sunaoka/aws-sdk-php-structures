<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeAccountAttributes;

trait DescribeAccountAttributesTrait
{
    /**
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributes()
    {
        $result = parent::describeAccountAttributes();
        return new DescribeAccountAttributesResponse($result->toArray());
    }
}
