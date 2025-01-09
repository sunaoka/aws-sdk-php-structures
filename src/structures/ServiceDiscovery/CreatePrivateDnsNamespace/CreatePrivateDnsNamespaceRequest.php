<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePrivateDnsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CreatorRequestId
 * @property string $Description
 * @property string $Vpc
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\PrivateDnsNamespaceProperties $Properties
 */
class CreatePrivateDnsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CreatorRequestId?: string,
     *     Description?: string,
     *     Vpc: string,
     *     Tags?: list<Shapes\Tag>,
     *     Properties?: Shapes\PrivateDnsNamespaceProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
