<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
