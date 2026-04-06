<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $glossaryIdentifier
 * @property string $identifier
 * @property string|null $longDescription
 * @property string|null $name
 * @property string|null $shortDescription
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property Shapes\TermRelations|null $termRelations
 */
class UpdateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     glossaryIdentifier?: string|null,
     *     identifier: string,
     *     longDescription?: string|null,
     *     name?: string|null,
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
