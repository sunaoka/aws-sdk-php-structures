<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $assetIdentifier
 * @property string $name
 * @property string|null $description
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property string|null $clientToken
 */
class CreateAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     assetIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     configuration: Shapes\AssetFilterConfiguration,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
