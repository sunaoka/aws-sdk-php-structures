<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property string $domainExecutionRole
 * @property string|null $kmsKeyIdentifier
 * @property array<string, string>|null $tags
 * @property 'V1'|'V2'|null $domainVersion
 * @property string|null $serviceRole
 * @property string|null $clientToken
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     singleSignOn?: Shapes\SingleSignOn|null,
     *     domainExecutionRole: string,
     *     kmsKeyIdentifier?: string|null,
     *     tags?: array<string, string>|null,
     *     domainVersion?: 'V1'|'V2'|null,
     *     serviceRole?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
