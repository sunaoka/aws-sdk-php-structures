<?php

namespace Sunaoka\Aws\Structures\Glue\AssociateGlossaryTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetIdentifier
 * @property list<string> $GlossaryTermIdentifiers
 * @property string|null $ClientToken
 */
class AssociateGlossaryTermsRequest extends Request
{
    /**
     * @param array{
     *     AssetIdentifier: string,
     *     GlossaryTermIdentifiers: list<string>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
