<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ApproximateAssetCount
 * @property string|null $Arn
 * @property Authorization|null $Authorization
 * @property string|null $CreatedAt
 * @property string|null $DomainName
 * @property EgressAccessLogs|null $EgressAccessLogs
 * @property string|null $Id
 * @property array<string, string>|null $Tags
 */
class PackagingGroup extends Shape
{
    /**
     * @param array{
     *     ApproximateAssetCount?: int|null,
     *     Arn?: string|null,
     *     Authorization?: Authorization|null,
     *     CreatedAt?: string|null,
     *     DomainName?: string|null,
     *     EgressAccessLogs?: EgressAccessLogs|null,
     *     Id?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
