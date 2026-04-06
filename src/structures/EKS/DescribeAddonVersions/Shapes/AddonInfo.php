<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addonName
 * @property string|null $type
 * @property list<AddonVersionInfo>|null $addonVersions
 * @property string|null $publisher
 * @property string|null $owner
 * @property MarketplaceInformation|null $marketplaceInformation
 */
class AddonInfo extends Shape
{
    /**
     * @param array{
     *     addonName?: string|null,
     *     type?: string|null,
     *     addonVersions?: list<AddonVersionInfo>|null,
     *     publisher?: string|null,
     *     owner?: string|null,
     *     marketplaceInformation?: MarketplaceInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
