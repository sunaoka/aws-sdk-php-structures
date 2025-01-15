<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateTableObjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $TransactionId
 * @property list<Shapes\WriteOperation> $WriteOperations
 */
class UpdateTableObjectsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     TransactionId?: string|null,
     *     WriteOperations: list<Shapes\WriteOperation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
