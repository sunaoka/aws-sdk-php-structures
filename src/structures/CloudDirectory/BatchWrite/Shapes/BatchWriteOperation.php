<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchCreateObject|null $CreateObject
 * @property BatchAttachObject|null $AttachObject
 * @property BatchDetachObject|null $DetachObject
 * @property BatchUpdateObjectAttributes|null $UpdateObjectAttributes
 * @property BatchDeleteObject|null $DeleteObject
 * @property BatchAddFacetToObject|null $AddFacetToObject
 * @property BatchRemoveFacetFromObject|null $RemoveFacetFromObject
 * @property BatchAttachPolicy|null $AttachPolicy
 * @property BatchDetachPolicy|null $DetachPolicy
 * @property BatchCreateIndex|null $CreateIndex
 * @property BatchAttachToIndex|null $AttachToIndex
 * @property BatchDetachFromIndex|null $DetachFromIndex
 * @property BatchAttachTypedLink|null $AttachTypedLink
 * @property BatchDetachTypedLink|null $DetachTypedLink
 * @property BatchUpdateLinkAttributes|null $UpdateLinkAttributes
 */
class BatchWriteOperation extends Shape
{
    /**
     * @param array{
     *     CreateObject?: BatchCreateObject|null,
     *     AttachObject?: BatchAttachObject|null,
     *     DetachObject?: BatchDetachObject|null,
     *     UpdateObjectAttributes?: BatchUpdateObjectAttributes|null,
     *     DeleteObject?: BatchDeleteObject|null,
     *     AddFacetToObject?: BatchAddFacetToObject|null,
     *     RemoveFacetFromObject?: BatchRemoveFacetFromObject|null,
     *     AttachPolicy?: BatchAttachPolicy|null,
     *     DetachPolicy?: BatchDetachPolicy|null,
     *     CreateIndex?: BatchCreateIndex|null,
     *     AttachToIndex?: BatchAttachToIndex|null,
     *     DetachFromIndex?: BatchDetachFromIndex|null,
     *     AttachTypedLink?: BatchAttachTypedLink|null,
     *     DetachTypedLink?: BatchDetachTypedLink|null,
     *     UpdateLinkAttributes?: BatchUpdateLinkAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
