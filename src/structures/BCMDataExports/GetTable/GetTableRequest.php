<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property array<string, string>|null $TableProperties
 */
class GetTableRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     TableProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
