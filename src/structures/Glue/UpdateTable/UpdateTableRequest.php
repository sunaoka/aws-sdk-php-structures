<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string|null $Name
 * @property Shapes\TableInput|null $TableInput
 * @property bool|null $SkipArchive
 * @property string|null $TransactionId
 * @property string|null $VersionId
 * @property 'ADD'|'REPLACE'|'ADD_OR_REPLACE'|'DROP'|null $ViewUpdateAction
 * @property bool|null $Force
 * @property Shapes\UpdateOpenTableFormatInput|null $UpdateOpenTableFormatInput
 */
class UpdateTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     Name?: string|null,
     *     TableInput?: Shapes\TableInput|null,
     *     SkipArchive?: bool|null,
     *     TransactionId?: string|null,
     *     VersionId?: string|null,
     *     ViewUpdateAction?: 'ADD'|'REPLACE'|'ADD_OR_REPLACE'|'DROP'|null,
     *     Force?: bool|null,
     *     UpdateOpenTableFormatInput?: Shapes\UpdateOpenTableFormatInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
