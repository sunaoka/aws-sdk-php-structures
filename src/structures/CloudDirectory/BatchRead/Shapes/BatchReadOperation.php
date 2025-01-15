<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchListObjectAttributes|null $ListObjectAttributes
 * @property BatchListObjectChildren|null $ListObjectChildren
 * @property BatchListAttachedIndices|null $ListAttachedIndices
 * @property BatchListObjectParentPaths|null $ListObjectParentPaths
 * @property BatchGetObjectInformation|null $GetObjectInformation
 * @property BatchGetObjectAttributes|null $GetObjectAttributes
 * @property BatchListObjectParents|null $ListObjectParents
 * @property BatchListObjectPolicies|null $ListObjectPolicies
 * @property BatchListPolicyAttachments|null $ListPolicyAttachments
 * @property BatchLookupPolicy|null $LookupPolicy
 * @property BatchListIndex|null $ListIndex
 * @property BatchListOutgoingTypedLinks|null $ListOutgoingTypedLinks
 * @property BatchListIncomingTypedLinks|null $ListIncomingTypedLinks
 * @property BatchGetLinkAttributes|null $GetLinkAttributes
 */
class BatchReadOperation extends Shape
{
    /**
     * @param array{
     *     ListObjectAttributes?: BatchListObjectAttributes|null,
     *     ListObjectChildren?: BatchListObjectChildren|null,
     *     ListAttachedIndices?: BatchListAttachedIndices|null,
     *     ListObjectParentPaths?: BatchListObjectParentPaths|null,
     *     GetObjectInformation?: BatchGetObjectInformation|null,
     *     GetObjectAttributes?: BatchGetObjectAttributes|null,
     *     ListObjectParents?: BatchListObjectParents|null,
     *     ListObjectPolicies?: BatchListObjectPolicies|null,
     *     ListPolicyAttachments?: BatchListPolicyAttachments|null,
     *     LookupPolicy?: BatchLookupPolicy|null,
     *     ListIndex?: BatchListIndex|null,
     *     ListOutgoingTypedLinks?: BatchListOutgoingTypedLinks|null,
     *     ListIncomingTypedLinks?: BatchListIncomingTypedLinks|null,
     *     GetLinkAttributes?: BatchGetLinkAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
