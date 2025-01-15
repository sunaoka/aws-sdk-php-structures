<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeKeywords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginationIdentity
 * @property list<string>|null $Keywords
 * @property list<Shapes\KeywordFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeKeywordsRequest extends Request
{
    /**
     * @param array{
     *     OriginationIdentity: string,
     *     Keywords?: list<string>|null,
     *     Filters?: list<Shapes\KeywordFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
