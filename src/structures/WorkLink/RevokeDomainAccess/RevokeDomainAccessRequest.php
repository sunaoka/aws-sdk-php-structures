<?php

namespace Sunaoka\Aws\Structures\WorkLink\RevokeDomainAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $DomainName
 */
class RevokeDomainAccessRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
