<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptedOutNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptOutListName
 * @property list<string>|null $OptedOutNumbers
 * @property list<Shapes\OptedOutFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeOptedOutNumbersRequest extends Request
{
    /**
     * @param array{
     *     OptOutListName: string,
     *     OptedOutNumbers?: list<string>|null,
     *     Filters?: list<Shapes\OptedOutFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
