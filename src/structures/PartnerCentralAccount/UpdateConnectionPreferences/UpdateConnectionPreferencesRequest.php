<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\UpdateConnectionPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int $Revision
 * @property 'ALLOW_ALL'|'DENY_ALL'|'ALLOW_BY_DEFAULT_DENY_SOME' $AccessType
 * @property list<string>|null $ExcludedParticipantIdentifiers
 */
class UpdateConnectionPreferencesRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Revision: int,
     *     AccessType: 'ALLOW_ALL'|'DENY_ALL'|'ALLOW_BY_DEFAULT_DENY_SOME',
     *     ExcludedParticipantIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
