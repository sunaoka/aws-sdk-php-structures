<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeKeywords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginationIdentity
 * @property list<string> $Keywords
 * @property list<Shapes\KeywordFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeKeywordsRequest extends Request
{
    /**
     * @param array{
     *     OriginationIdentity: string,
     *     Keywords?: list<string>,
     *     Filters?: list<Shapes\KeywordFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
