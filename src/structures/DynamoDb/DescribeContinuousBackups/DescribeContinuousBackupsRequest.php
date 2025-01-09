<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeContinuousBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 */
class DescribeContinuousBackupsRequest extends Request
{
    /**
     * @param array{TableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
