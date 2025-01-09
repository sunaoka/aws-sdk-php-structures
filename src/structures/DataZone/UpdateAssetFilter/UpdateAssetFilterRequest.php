<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property string $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $name
 */
class UpdateAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     configuration?: Shapes\AssetFilterConfiguration,
     *     description?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
