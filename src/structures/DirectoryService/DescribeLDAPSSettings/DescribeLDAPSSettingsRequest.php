<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeLDAPSSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'Client' $Type
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeLDAPSSettingsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     Type?: 'Client',
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
