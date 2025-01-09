<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace' $owner
 * @property list<Shapes\Filter> $filters
 * @property bool $byName
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 * @property bool $includeDeprecated
 */
class ListImagesRequest extends Request
{
    /**
     * @param array{
     *     owner?: 'Self'|'Shared'|'Amazon'|'ThirdParty'|'AWSMarketplace',
     *     filters?: list<Shapes\Filter>,
     *     byName?: bool,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string,
     *     includeDeprecated?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
