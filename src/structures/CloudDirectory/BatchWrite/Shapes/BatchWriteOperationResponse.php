<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchCreateObjectResponse|null $CreateObject
 * @property BatchAttachObjectResponse|null $AttachObject
 * @property BatchDetachObjectResponse|null $DetachObject
 * @property BatchUpdateObjectAttributesResponse|null $UpdateObjectAttributes
 * @property BatchDeleteObjectResponse|null $DeleteObject
 * @property BatchAddFacetToObjectResponse|null $AddFacetToObject
 * @property BatchRemoveFacetFromObjectResponse|null $RemoveFacetFromObject
 * @property BatchAttachPolicyResponse|null $AttachPolicy
 * @property BatchDetachPolicyResponse|null $DetachPolicy
 * @property BatchCreateIndexResponse|null $CreateIndex
 * @property BatchAttachToIndexResponse|null $AttachToIndex
 * @property BatchDetachFromIndexResponse|null $DetachFromIndex
 * @property BatchAttachTypedLinkResponse|null $AttachTypedLink
 * @property BatchDetachTypedLinkResponse|null $DetachTypedLink
 * @property BatchUpdateLinkAttributesResponse|null $UpdateLinkAttributes
 */
class BatchWriteOperationResponse extends Shape
{
    /**
     * @param array{
     *     CreateObject?: BatchCreateObjectResponse|null,
     *     AttachObject?: BatchAttachObjectResponse|null,
     *     DetachObject?: BatchDetachObjectResponse|null,
     *     UpdateObjectAttributes?: BatchUpdateObjectAttributesResponse|null,
     *     DeleteObject?: BatchDeleteObjectResponse|null,
     *     AddFacetToObject?: BatchAddFacetToObjectResponse|null,
     *     RemoveFacetFromObject?: BatchRemoveFacetFromObjectResponse|null,
     *     AttachPolicy?: BatchAttachPolicyResponse|null,
     *     DetachPolicy?: BatchDetachPolicyResponse|null,
     *     CreateIndex?: BatchCreateIndexResponse|null,
     *     AttachToIndex?: BatchAttachToIndexResponse|null,
     *     DetachFromIndex?: BatchDetachFromIndexResponse|null,
     *     AttachTypedLink?: BatchAttachTypedLinkResponse|null,
     *     DetachTypedLink?: BatchDetachTypedLinkResponse|null,
     *     UpdateLinkAttributes?: BatchUpdateLinkAttributesResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
