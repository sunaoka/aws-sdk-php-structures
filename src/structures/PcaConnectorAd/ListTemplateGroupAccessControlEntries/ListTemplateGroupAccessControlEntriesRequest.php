<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\ListTemplateGroupAccessControlEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $TemplateArn
 */
class ListTemplateGroupAccessControlEntriesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     TemplateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
