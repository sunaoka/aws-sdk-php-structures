<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $WithDecryption
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetParameterHistoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WithDecryption?: bool,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
