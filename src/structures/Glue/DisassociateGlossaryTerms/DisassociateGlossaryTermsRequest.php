<?php

namespace Sunaoka\Aws\Structures\Glue\DisassociateGlossaryTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property list<string> $GlossaryTermIdentifiers
 * @property string|null $ClientToken
 */
class DisassociateGlossaryTermsRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     GlossaryTermIdentifiers: list<string>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
