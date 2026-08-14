<?php

namespace Sunaoka\Aws\Structures\Glue\DisassociateGlossaryTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property string|null $IterableFormName
 * @property string|null $ItemIdentifier
 * @property list<string> $GlossaryTermIdentifiers
 * @property string|null $ClientToken
 */
class DisassociateGlossaryTermsRequest extends Request
{
    /**
     * @param array{
     *     AssetIdentifier: string,
     *     IterableFormName?: string|null,
     *     ItemIdentifier?: string|null,
     *     GlossaryTermIdentifiers: list<string>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
