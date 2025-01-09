<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $WithDecryption
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class GetParameterHistoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     WithDecryption?: bool,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
