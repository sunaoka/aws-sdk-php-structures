<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $assetIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\AssetFilterConfiguration|null $configuration
 */
class UpdateAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     assetIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     configuration?: Shapes\AssetFilterConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
