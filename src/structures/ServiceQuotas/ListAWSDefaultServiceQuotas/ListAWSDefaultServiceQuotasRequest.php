<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListAWSDefaultServiceQuotas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListAWSDefaultServiceQuotasRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
