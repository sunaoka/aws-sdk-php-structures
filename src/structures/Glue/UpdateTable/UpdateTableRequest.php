<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property Shapes\TableInput $TableInput
 * @property bool|null $SkipArchive
 * @property string|null $TransactionId
 * @property string|null $VersionId
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableInput: Shapes\TableInput,
     *     SkipArchive?: bool|null,
     *     TransactionId?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
