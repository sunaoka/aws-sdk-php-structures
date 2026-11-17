<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagKeys;

trait DescribeTagKeysTrait
{
    /**
     * @return DescribeTagKeysResponse
     */
    public function describeTagKeys()
    {
        $result = parent::describeTagKeys();
        return new DescribeTagKeysResponse($result->toArray());
    }
}
