<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addonName
 * @property string $type
 * @property list<AddonVersionInfo> $addonVersions
 * @property string $publisher
 * @property string $owner
 * @property MarketplaceInformation $marketplaceInformation
 */
class AddonInfo extends Shape
{
    /**
     * @param array{
     *     addonName?: string,
     *     type?: string,
     *     addonVersions?: list<AddonVersionInfo>,
     *     publisher?: string,
     *     owner?: string,
     *     marketplaceInformation?: MarketplaceInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
