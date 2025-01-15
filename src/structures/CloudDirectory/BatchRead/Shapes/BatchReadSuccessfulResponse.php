<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchListObjectAttributesResponse|null $ListObjectAttributes
 * @property BatchListObjectChildrenResponse|null $ListObjectChildren
 * @property BatchGetObjectInformationResponse|null $GetObjectInformation
 * @property BatchGetObjectAttributesResponse|null $GetObjectAttributes
 * @property BatchListAttachedIndicesResponse|null $ListAttachedIndices
 * @property BatchListObjectParentPathsResponse|null $ListObjectParentPaths
 * @property BatchListObjectPoliciesResponse|null $ListObjectPolicies
 * @property BatchListPolicyAttachmentsResponse|null $ListPolicyAttachments
 * @property BatchLookupPolicyResponse|null $LookupPolicy
 * @property BatchListIndexResponse|null $ListIndex
 * @property BatchListOutgoingTypedLinksResponse|null $ListOutgoingTypedLinks
 * @property BatchListIncomingTypedLinksResponse|null $ListIncomingTypedLinks
 * @property BatchGetLinkAttributesResponse|null $GetLinkAttributes
 * @property BatchListObjectParentsResponse|null $ListObjectParents
 */
class BatchReadSuccessfulResponse extends Shape
{
    /**
     * @param array{
     *     ListObjectAttributes?: BatchListObjectAttributesResponse|null,
     *     ListObjectChildren?: BatchListObjectChildrenResponse|null,
     *     GetObjectInformation?: BatchGetObjectInformationResponse|null,
     *     GetObjectAttributes?: BatchGetObjectAttributesResponse|null,
     *     ListAttachedIndices?: BatchListAttachedIndicesResponse|null,
     *     ListObjectParentPaths?: BatchListObjectParentPathsResponse|null,
     *     ListObjectPolicies?: BatchListObjectPoliciesResponse|null,
     *     ListPolicyAttachments?: BatchListPolicyAttachmentsResponse|null,
     *     LookupPolicy?: BatchLookupPolicyResponse|null,
     *     ListIndex?: BatchListIndexResponse|null,
     *     ListOutgoingTypedLinks?: BatchListOutgoingTypedLinksResponse|null,
     *     ListIncomingTypedLinks?: BatchListIncomingTypedLinksResponse|null,
     *     GetLinkAttributes?: BatchGetLinkAttributesResponse|null,
     *     ListObjectParents?: BatchListObjectParentsResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
