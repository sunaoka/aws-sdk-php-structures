<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ApproximateAssetCount
 * @property string $Arn
 * @property Authorization $Authorization
 * @property string $CreatedAt
 * @property string $DomainName
 * @property EgressAccessLogs $EgressAccessLogs
 * @property string $Id
 * @property array<string, string> $Tags
 */
class PackagingGroup extends Shape
{
    /**
     * @param array{
     *     ApproximateAssetCount?: int,
     *     Arn?: string,
     *     Authorization?: Authorization,
     *     CreatedAt?: string,
     *     DomainName?: string,
     *     EgressAccessLogs?: EgressAccessLogs,
     *     Id?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
