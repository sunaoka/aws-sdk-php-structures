<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $AccountId
 * @property list<string>|null $DnsIpAddrs
 * @property DirectoryVpcSettingsDescription|null $VpcSettings
 * @property RadiusSettings|null $RadiusSettings
 * @property 'Creating'|'Completed'|'Failed'|null $RadiusStatus
 */
class OwnerDirectoryDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     AccountId?: string|null,
     *     DnsIpAddrs?: list<string>|null,
     *     VpcSettings?: DirectoryVpcSettingsDescription|null,
     *     RadiusSettings?: RadiusSettings|null,
     *     RadiusStatus?: 'Creating'|'Completed'|'Failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
