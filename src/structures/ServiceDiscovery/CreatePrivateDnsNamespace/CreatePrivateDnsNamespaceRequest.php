<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePrivateDnsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $CreatorRequestId
 * @property string|null $Description
 * @property string $Vpc
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\PrivateDnsNamespaceProperties|null $Properties
 */
class CreatePrivateDnsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CreatorRequestId?: string|null,
     *     Description?: string|null,
     *     Vpc: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     Properties?: Shapes\PrivateDnsNamespaceProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
