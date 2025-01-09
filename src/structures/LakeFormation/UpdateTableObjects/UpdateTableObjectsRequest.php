<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $TransactionId
 * @property list<Shapes\WriteOperation> $WriteOperations
 */
class UpdateTableObjectsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     TransactionId?: string,
     *     WriteOperations: list<Shapes\WriteOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
