<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossaryTerm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $glossaryIdentifier
 * @property string $longDescription
 * @property string $name
 * @property string $shortDescription
 * @property 'ENABLED'|'DISABLED' $status
 * @property Shapes\TermRelations $termRelations
 */
class CreateGlossaryTermRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     glossaryIdentifier: string,
     *     longDescription?: string,
     *     name: string,
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
