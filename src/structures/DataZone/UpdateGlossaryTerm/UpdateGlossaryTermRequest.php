<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $glossaryIdentifier
 * @property string $identifier
 * @property string $longDescription
 * @property string $name
 * @property string $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property Shapes\TermRelations $termRelations
 */
class UpdateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     glossaryIdentifier?: string,
     *     identifier: string,
     *     longDescription?: string,
     *     name?: string,
     *     shortDescription?: string,
     *     status?: 'ENABLED'|'DISABLED',
     *     termRelations?: Shapes\TermRelations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
