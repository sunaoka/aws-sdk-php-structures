<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property bool|null $IncludeHidden
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     IncludeHidden?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
