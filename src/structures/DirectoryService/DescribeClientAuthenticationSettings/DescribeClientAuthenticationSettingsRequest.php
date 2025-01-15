<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeClientAuthenticationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'SmartCard'|'SmartCardOrPassword'|null $Type
 * @property string|null $NextToken
 * @property int<1, 50>|null $Limit
 */
class DescribeClientAuthenticationSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type?: 'SmartCard'|'SmartCardOrPassword'|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
