<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RemoveIpRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string> $CidrIps
 */
class RemoveIpRoutesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     CidrIps: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
