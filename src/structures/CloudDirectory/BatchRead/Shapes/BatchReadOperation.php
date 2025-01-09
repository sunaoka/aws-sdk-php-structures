<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchListObjectAttributes $ListObjectAttributes
 * @property BatchListObjectChildren $ListObjectChildren
 * @property BatchListAttachedIndices $ListAttachedIndices
 * @property BatchListObjectParentPaths $ListObjectParentPaths
 * @property BatchGetObjectInformation $GetObjectInformation
 * @property BatchGetObjectAttributes $GetObjectAttributes
 * @property BatchListObjectParents $ListObjectParents
 * @property BatchListObjectPolicies $ListObjectPolicies
 * @property BatchListPolicyAttachments $ListPolicyAttachments
 * @property BatchLookupPolicy $LookupPolicy
 * @property BatchListIndex $ListIndex
 * @property BatchListOutgoingTypedLinks $ListOutgoingTypedLinks
 * @property BatchListIncomingTypedLinks $ListIncomingTypedLinks
 * @property BatchGetLinkAttributes $GetLinkAttributes
 */
class BatchReadOperation extends Shape
{
    /**
     * @param array{
     *     ListObjectAttributes?: BatchListObjectAttributes,
     *     ListObjectChildren?: BatchListObjectChildren,
     *     ListAttachedIndices?: BatchListAttachedIndices,
     *     ListObjectParentPaths?: BatchListObjectParentPaths,
     *     GetObjectInformation?: BatchGetObjectInformation,
     *     GetObjectAttributes?: BatchGetObjectAttributes,
     *     ListObjectParents?: BatchListObjectParents,
     *     ListObjectPolicies?: BatchListObjectPolicies,
     *     ListPolicyAttachments?: BatchListPolicyAttachments,
     *     LookupPolicy?: BatchLookupPolicy,
     *     ListIndex?: BatchListIndex,
     *     ListOutgoingTypedLinks?: BatchListOutgoingTypedLinks,
     *     ListIncomingTypedLinks?: BatchListIncomingTypedLinks,
     *     GetLinkAttributes?: BatchGetLinkAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
