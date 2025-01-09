<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 * @property list<string> $OptedOutNumbers
 * @property list<Shapes\OptedOutFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeOptedOutNumbersRequest extends Request
{
    /**
     * @param array{
     *     OptOutListName: string,
     *     OptedOutNumbers?: list<string>,
     *     Filters?: list<Shapes\OptedOutFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
