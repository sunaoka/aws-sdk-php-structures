<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RemoveIpRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string>|null $CidrIps
 * @property list<string>|null $CidrIpv6s
 */
class RemoveIpRoutesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     CidrIps?: list<string>|null,
     *     CidrIpv6s?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
