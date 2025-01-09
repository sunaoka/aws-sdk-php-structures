<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property array<'Name'|'Version'|'AssumeRole'|'Parameters', string> $Definition
 * @property string $Description
 * @property string $AcceptLanguage
 */
class UpdateServiceActionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     Definition?: array<'Name'|'Version'|'AssumeRole'|'Parameters', string>,
     *     Description?: string,
     *     AcceptLanguage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
