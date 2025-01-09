<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableClientAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'SmartCard'|'SmartCardOrPassword' $Type
 */
class EnableClientAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type: 'SmartCard'|'SmartCardOrPassword'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
