<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreateHttpNamespace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $CreatorRequestId
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHttpNamespaceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CreatorRequestId?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
