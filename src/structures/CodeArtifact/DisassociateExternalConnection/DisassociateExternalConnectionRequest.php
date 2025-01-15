<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisassociateExternalConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property string $externalConnection
 */
class DisassociateExternalConnectionRequest extends Request
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
