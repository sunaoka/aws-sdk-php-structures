<?php

namespace Sunaoka\Aws\Structures\DataZone\DisassociateGovernedTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'ASSET' $entityType
 * @property list<string> $governedGlossaryTerms
 */
class DisassociateGovernedTermsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'ASSET',
     *     governedGlossaryTerms: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
