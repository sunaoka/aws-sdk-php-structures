<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $IncludeHidden
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     IncludeHidden?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
