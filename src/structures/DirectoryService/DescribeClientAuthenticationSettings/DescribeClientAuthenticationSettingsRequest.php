<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeClientAuthenticationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'SmartCard'|'SmartCardOrPassword' $Type
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeClientAuthenticationSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type?: 'SmartCard'|'SmartCardOrPassword',
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
