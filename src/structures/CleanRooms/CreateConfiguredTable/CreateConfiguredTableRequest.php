<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\TableReference $tableReference
 * @property list<string> $allowedColumns
 * @property 'DIRECT_QUERY' $analysisMethod
 * @property array<string, string>|null $tags
 */
class CreateConfiguredTableRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     tableReference: Shapes\TableReference,
     *     allowedColumns: list<string>,
     *     analysisMethod: 'DIRECT_QUERY',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
