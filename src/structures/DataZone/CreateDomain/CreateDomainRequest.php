<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $domainExecutionRole
 * @property 'V1'|'V2' $domainVersion
 * @property string $kmsKeyIdentifier
 * @property string $name
 * @property string $serviceRole
 * @property Shapes\SingleSignOn $singleSignOn
 * @property array<string, string> $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     domainExecutionRole: string,
     *     domainVersion?: 'V1'|'V2',
     *     kmsKeyIdentifier?: string,
     *     name: string,
     *     serviceRole?: string,
     *     singleSignOn?: Shapes\SingleSignOn,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
