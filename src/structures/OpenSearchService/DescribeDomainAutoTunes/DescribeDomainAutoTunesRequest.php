<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainAutoTunes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeDomainAutoTunesRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
