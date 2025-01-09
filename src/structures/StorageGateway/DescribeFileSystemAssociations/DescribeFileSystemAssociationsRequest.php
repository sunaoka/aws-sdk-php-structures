<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $FileSystemAssociationARNList
 */
class DescribeFileSystemAssociationsRequest extends Request
{
    /**
     * @param array{FileSystemAssociationARNList: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
