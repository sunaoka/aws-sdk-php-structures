<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeLDAPSSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'Client'|null $Type
 * @property string|null $NextToken
 * @property int<1, 50>|null $Limit
 */
class DescribeLDAPSSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type?: 'Client'|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
