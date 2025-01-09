<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreatePublicDnsNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CreatorRequestId
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\PublicDnsNamespaceProperties $Properties
 */
class CreatePublicDnsNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CreatorRequestId?: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Properties?: Shapes\PublicDnsNamespaceProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
