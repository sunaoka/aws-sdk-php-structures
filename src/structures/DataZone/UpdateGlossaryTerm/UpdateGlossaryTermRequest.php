<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $glossaryIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $shortDescription
 * @property string|null $longDescription
 * @property Shapes\TermRelations|null $termRelations
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class UpdateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     glossaryIdentifier?: string|null,
     *     identifier: string,
     *     name?: string|null,
     *     shortDescription?: string|null,
     *     longDescription?: string|null,
     *     termRelations?: Shapes\TermRelations|null,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
