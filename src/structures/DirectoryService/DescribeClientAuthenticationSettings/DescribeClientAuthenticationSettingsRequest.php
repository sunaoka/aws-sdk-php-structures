<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeClientAuthenticationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'SmartCard'|'SmartCardOrPassword' $Type
 * @property string $NextToken
 * @property int<1, 50> $Limit
 */
class DescribeClientAuthenticationSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type?: 'SmartCard'|'SmartCardOrPassword',
     *     NextToken?: string,
     *     Limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
