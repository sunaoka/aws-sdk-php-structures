<?php

namespace Sunaoka\Aws\Structures\Pricing\GetAttributeValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $AttributeName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetAttributeValuesRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     AttributeName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
