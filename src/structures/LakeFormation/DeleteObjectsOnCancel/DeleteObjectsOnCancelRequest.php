<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteObjectsOnCancel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $TransactionId
 * @property list<Shapes\VirtualObject> $Objects
 */
class DeleteObjectsOnCancelRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     TransactionId: string,
     *     Objects: list<Shapes\VirtualObject>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
