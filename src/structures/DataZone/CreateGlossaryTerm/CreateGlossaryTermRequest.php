<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $glossaryIdentifier
 * @property string $name
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property string|null $shortDescription
 * @property string|null $longDescription
 * @property Shapes\TermRelations|null $termRelations
 * @property string|null $clientToken
 */
class CreateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     glossaryIdentifier: string,
     *     name: string,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     shortDescription?: string|null,
     *     longDescription?: string|null,
     *     termRelations?: Shapes\TermRelations|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
