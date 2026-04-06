<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property Shapes\AssetFilterConfiguration|null $configuration
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 */
class UpdateAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     configuration?: Shapes\AssetFilterConfiguration|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
