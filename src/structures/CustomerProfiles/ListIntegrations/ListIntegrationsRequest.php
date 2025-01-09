<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property bool $IncludeHidden
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     IncludeHidden?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
