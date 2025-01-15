<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeConditionalForwarders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string>|null $RemoteDomainNames
 */
class DescribeConditionalForwardersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
