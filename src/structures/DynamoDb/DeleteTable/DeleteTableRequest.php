<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 */
class DeleteTableRequest extends Request
{
    /**
     * @param array{TableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
