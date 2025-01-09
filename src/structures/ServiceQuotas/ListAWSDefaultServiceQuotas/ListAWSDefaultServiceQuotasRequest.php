<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListAWSDefaultServiceQuotas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListAWSDefaultServiceQuotasRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
