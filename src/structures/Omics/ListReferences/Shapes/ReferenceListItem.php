<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $referenceStoreId
 * @property string $md5
 * @property 'ACTIVE'|'DELETING'|'DELETED'|null $status
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class ReferenceListItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     referenceStoreId: string,
     *     md5: string,
     *     status?: 'ACTIVE'|'DELETING'|'DELETED'|null,
     *     name?: string|null,
     *     description?: string|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
