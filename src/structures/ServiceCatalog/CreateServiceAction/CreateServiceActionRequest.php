<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'SSM_AUTOMATION' $DefinitionType
 * @property array<'Name'|'Version'|'AssumeRole'|'Parameters', string> $Definition
 * @property string $Description
 * @property string $AcceptLanguage
 * @property string $IdempotencyToken
 */
class CreateServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DefinitionType: 'SSM_AUTOMATION',
     *     Definition: array<'Name'|'Version'|'AssumeRole'|'Parameters', string>,
     *     Description?: string,
     *     AcceptLanguage?: string,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
