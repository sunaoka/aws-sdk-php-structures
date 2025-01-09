<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property Shapes\TableInput $TableInput
 * @property bool $SkipArchive
 * @property string $TransactionId
 * @property string $VersionId
 * @property 'ADD'|'REPLACE'|'ADD_OR_REPLACE'|'DROP' $ViewUpdateAction
 * @property bool $Force
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableInput: Shapes\TableInput,
     *     SkipArchive?: bool,
     *     TransactionId?: string,
     *     VersionId?: string,
     *     ViewUpdateAction?: 'ADD'|'REPLACE'|'ADD_OR_REPLACE'|'DROP',
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
