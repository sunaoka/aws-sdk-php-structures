<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTableSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalTableName
 */
class DescribeGlobalTableSettingsRequest extends Request
{
    /**
     * @param array{GlobalTableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
