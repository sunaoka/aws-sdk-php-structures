<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $WithDecryption
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class GetParameterHistoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WithDecryption?: bool|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
