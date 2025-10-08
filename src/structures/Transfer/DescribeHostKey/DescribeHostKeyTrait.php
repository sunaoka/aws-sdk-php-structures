<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeHostKey;

trait DescribeHostKeyTrait
{
    /**
     * @param DescribeHostKeyRequest $args
     * @return DescribeHostKeyResponse
     */
    public function describeHostKey(DescribeHostKeyRequest $args)
    {
        $result = parent::describeHostKey($args->toArray());
        return new DescribeHostKeyResponse($result->toArray());
    }
}
