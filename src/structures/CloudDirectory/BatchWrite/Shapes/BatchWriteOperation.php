<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchCreateObject $CreateObject
 * @property BatchAttachObject $AttachObject
 * @property BatchDetachObject $DetachObject
 * @property BatchUpdateObjectAttributes $UpdateObjectAttributes
 * @property BatchDeleteObject $DeleteObject
 * @property BatchAddFacetToObject $AddFacetToObject
 * @property BatchRemoveFacetFromObject $RemoveFacetFromObject
 * @property BatchAttachPolicy $AttachPolicy
 * @property BatchDetachPolicy $DetachPolicy
 * @property BatchCreateIndex $CreateIndex
 * @property BatchAttachToIndex $AttachToIndex
 * @property BatchDetachFromIndex $DetachFromIndex
 * @property BatchAttachTypedLink $AttachTypedLink
 * @property BatchDetachTypedLink $DetachTypedLink
 * @property BatchUpdateLinkAttributes $UpdateLinkAttributes
 */
class BatchWriteOperation extends Shape
{
    /**
     * @param array{
     *     CreateObject?: BatchCreateObject,
     *     AttachObject?: BatchAttachObject,
     *     DetachObject?: BatchDetachObject,
     *     UpdateObjectAttributes?: BatchUpdateObjectAttributes,
     *     DeleteObject?: BatchDeleteObject,
     *     AddFacetToObject?: BatchAddFacetToObject,
     *     RemoveFacetFromObject?: BatchRemoveFacetFromObject,
     *     AttachPolicy?: BatchAttachPolicy,
     *     DetachPolicy?: BatchDetachPolicy,
     *     CreateIndex?: BatchCreateIndex,
     *     AttachToIndex?: BatchAttachToIndex,
     *     DetachFromIndex?: BatchDetachFromIndex,
     *     AttachTypedLink?: BatchAttachTypedLink,
     *     DetachTypedLink?: BatchDetachTypedLink,
     *     UpdateLinkAttributes?: BatchUpdateLinkAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
