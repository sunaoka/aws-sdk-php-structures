<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchListObjectAttributesResponse $ListObjectAttributes
 * @property BatchListObjectChildrenResponse $ListObjectChildren
 * @property BatchGetObjectInformationResponse $GetObjectInformation
 * @property BatchGetObjectAttributesResponse $GetObjectAttributes
 * @property BatchListAttachedIndicesResponse $ListAttachedIndices
 * @property BatchListObjectParentPathsResponse $ListObjectParentPaths
 * @property BatchListObjectPoliciesResponse $ListObjectPolicies
 * @property BatchListPolicyAttachmentsResponse $ListPolicyAttachments
 * @property BatchLookupPolicyResponse $LookupPolicy
 * @property BatchListIndexResponse $ListIndex
 * @property BatchListOutgoingTypedLinksResponse $ListOutgoingTypedLinks
 * @property BatchListIncomingTypedLinksResponse $ListIncomingTypedLinks
 * @property BatchGetLinkAttributesResponse $GetLinkAttributes
 * @property BatchListObjectParentsResponse $ListObjectParents
 */
class BatchReadSuccessfulResponse extends Shape
{
    /**
     * @param array{
     *     ListObjectAttributes?: BatchListObjectAttributesResponse,
     *     ListObjectChildren?: BatchListObjectChildrenResponse,
     *     GetObjectInformation?: BatchGetObjectInformationResponse,
     *     GetObjectAttributes?: BatchGetObjectAttributesResponse,
     *     ListAttachedIndices?: BatchListAttachedIndicesResponse,
     *     ListObjectParentPaths?: BatchListObjectParentPathsResponse,
     *     ListObjectPolicies?: BatchListObjectPoliciesResponse,
     *     ListPolicyAttachments?: BatchListPolicyAttachmentsResponse,
     *     LookupPolicy?: BatchLookupPolicyResponse,
     *     ListIndex?: BatchListIndexResponse,
     *     ListOutgoingTypedLinks?: BatchListOutgoingTypedLinksResponse,
     *     ListIncomingTypedLinks?: BatchListIncomingTypedLinksResponse,
     *     GetLinkAttributes?: BatchGetLinkAttributesResponse,
     *     ListObjectParents?: BatchListObjectParentsResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
