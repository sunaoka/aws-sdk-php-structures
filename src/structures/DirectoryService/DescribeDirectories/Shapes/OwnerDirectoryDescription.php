<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $AccountId
 * @property list<string> $DnsIpAddrs
 * @property DirectoryVpcSettingsDescription $VpcSettings
 * @property RadiusSettings $RadiusSettings
 * @property 'Creating'|'Completed'|'Failed' $RadiusStatus
 */
class OwnerDirectoryDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     AccountId?: string,
     *     DnsIpAddrs?: list<string>,
     *     VpcSettings?: DirectoryVpcSettingsDescription,
     *     RadiusSettings?: RadiusSettings,
     *     RadiusStatus?: 'Creating'|'Completed'|'Failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
