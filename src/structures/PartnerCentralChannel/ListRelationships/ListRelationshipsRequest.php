<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListRelationships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $catalog
 * @property int<1, 100>|null $maxResults
 * @property list<string>|null $associatedAccountIds
 * @property list<'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'>|null $associationTypes
 * @property list<string>|null $displayNames
 * @property list<string>|null $programManagementAccountIdentifiers
 * @property Shapes\ListRelationshipsSortBase|null $sort
 * @property string|null $nextToken
 */
class ListRelationshipsRequest extends Request
{
    /**
     * @param array{
     *     catalog: string,
     *     maxResults?: int<1, 100>|null,
     *     associatedAccountIds?: list<string>|null,
     *     associationTypes?: list<'DOWNSTREAM_SELLER'|'END_CUSTOMER'|'INTERNAL'>|null,
     *     displayNames?: list<string>|null,
     *     programManagementAccountIdentifiers?: list<string>|null,
     *     sort?: Shapes\ListRelationshipsSortBase|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
