<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'SSM_AUTOMATION' $DefinitionType
 * @property array<'Name'|'Version'|'AssumeRole'|'Parameters', string> $Definition
 * @property string|null $Description
 * @property string|null $AcceptLanguage
 * @property string $IdempotencyToken
 */
class CreateServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DefinitionType: 'SSM_AUTOMATION',
     *     Definition: array<'Name'|'Version'|'AssumeRole'|'Parameters', string>,
     *     Description?: string|null,
     *     AcceptLanguage?: string|null,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
