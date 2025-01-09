<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteConditionalForwarder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RemoteDomainName
 */
class DeleteConditionalForwarderRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RemoteDomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
