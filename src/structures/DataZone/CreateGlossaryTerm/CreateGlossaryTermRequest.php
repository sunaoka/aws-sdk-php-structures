<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $glossaryIdentifier
 * @property string|null $longDescription
 * @property string $name
 * @property string|null $shortDescription
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property Shapes\TermRelations|null $termRelations
 */
class CreateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     glossaryIdentifier: string,
     *     longDescription?: string|null,
     *     name: string,
     *     shortDescription?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     termRelations?: Shapes\TermRelations|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
