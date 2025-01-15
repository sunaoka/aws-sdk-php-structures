<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property array<'Name'|'Version'|'AssumeRole'|'Parameters', string>|null $Definition
 * @property string|null $Description
 * @property string|null $AcceptLanguage
 */
class UpdateServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     Definition?: array<'Name'|'Version'|'AssumeRole'|'Parameters', string>|null,
     *     Description?: string|null,
     *     AcceptLanguage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
