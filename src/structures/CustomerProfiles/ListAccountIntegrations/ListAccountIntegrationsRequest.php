<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListAccountIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Uri
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property bool|null $IncludeHidden
 */
class ListAccountIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     Uri: string,
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
