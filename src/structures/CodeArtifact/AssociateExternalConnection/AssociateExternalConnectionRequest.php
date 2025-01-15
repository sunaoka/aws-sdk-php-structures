<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\AssociateExternalConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property string $externalConnection
 */
class AssociateExternalConnectionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     externalConnection: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
