<?php

namespace Sunaoka\Aws\Structures\Pricing\GetAttributeValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $AttributeName
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetAttributeValuesRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     AttributeName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
