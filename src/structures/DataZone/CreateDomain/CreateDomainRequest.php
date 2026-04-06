<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $domainExecutionRole
 * @property string|null $kmsKeyIdentifier
 * @property string $name
 * @property Shapes\SingleSignOn|null $singleSignOn
 * @property array<string, string>|null $tags
 */
class CreateDomainRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     domainExecutionRole: string,
     *     kmsKeyIdentifier?: string|null,
     *     name: string,
     *     singleSignOn?: Shapes\SingleSignOn|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
