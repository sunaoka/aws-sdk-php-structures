<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeNFSFileShares;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FileShareARNList
 */
class DescribeNFSFileSharesRequest extends Request
{
    /**
     * @param array{FileShareARNList: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
