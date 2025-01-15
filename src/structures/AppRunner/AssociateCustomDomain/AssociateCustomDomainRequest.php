<?php

namespace Sunaoka\Aws\Structures\AppRunner\AssociateCustomDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string $DomainName
 * @property bool|null $EnableWWWSubdomain
 */
class AssociateCustomDomainRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     DomainName: string,
     *     EnableWWWSubdomain?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
