<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchCreateObjectResponse $CreateObject
 * @property BatchAttachObjectResponse $AttachObject
 * @property BatchDetachObjectResponse $DetachObject
 * @property BatchUpdateObjectAttributesResponse $UpdateObjectAttributes
 * @property BatchDeleteObjectResponse $DeleteObject
 * @property BatchAddFacetToObjectResponse $AddFacetToObject
 * @property BatchRemoveFacetFromObjectResponse $RemoveFacetFromObject
 * @property BatchAttachPolicyResponse $AttachPolicy
 * @property BatchDetachPolicyResponse $DetachPolicy
 * @property BatchCreateIndexResponse $CreateIndex
 * @property BatchAttachToIndexResponse $AttachToIndex
 * @property BatchDetachFromIndexResponse $DetachFromIndex
 * @property BatchAttachTypedLinkResponse $AttachTypedLink
 * @property BatchDetachTypedLinkResponse $DetachTypedLink
 * @property BatchUpdateLinkAttributesResponse $UpdateLinkAttributes
 */
class BatchWriteOperationResponse extends Shape
{
    /**
     * @param array{
     *     CreateObject?: BatchCreateObjectResponse,
     *     AttachObject?: BatchAttachObjectResponse,
     *     DetachObject?: BatchDetachObjectResponse,
     *     UpdateObjectAttributes?: BatchUpdateObjectAttributesResponse,
     *     DeleteObject?: BatchDeleteObjectResponse,
     *     AddFacetToObject?: BatchAddFacetToObjectResponse,
     *     RemoveFacetFromObject?: BatchRemoveFacetFromObjectResponse,
     *     AttachPolicy?: BatchAttachPolicyResponse,
     *     DetachPolicy?: BatchDetachPolicyResponse,
     *     CreateIndex?: BatchCreateIndexResponse,
     *     AttachToIndex?: BatchAttachToIndexResponse,
     *     DetachFromIndex?: BatchDetachFromIndexResponse,
     *     AttachTypedLink?: BatchAttachTypedLinkResponse,
     *     DetachTypedLink?: BatchDetachTypedLinkResponse,
     *     UpdateLinkAttributes?: BatchUpdateLinkAttributesResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
