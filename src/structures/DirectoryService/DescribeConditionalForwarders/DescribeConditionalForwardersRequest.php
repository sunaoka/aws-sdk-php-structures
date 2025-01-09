<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeConditionalForwarders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $RemoteDomainNames
 */
class DescribeConditionalForwardersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
