<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreateHttpNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CreatorRequestId
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateHttpNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CreatorRequestId?: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
