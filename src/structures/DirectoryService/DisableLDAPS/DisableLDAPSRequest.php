<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableLDAPS;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'Client' $Type
 */
class DisableLDAPSRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type: 'Client'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
