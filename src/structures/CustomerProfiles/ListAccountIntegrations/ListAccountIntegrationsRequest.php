<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListAccountIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Uri
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $IncludeHidden
 */
class ListAccountIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     Uri: string,
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
