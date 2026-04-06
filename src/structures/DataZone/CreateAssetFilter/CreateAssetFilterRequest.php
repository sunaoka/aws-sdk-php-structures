<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string|null $clientToken
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $name
 */
class CreateAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     clientToken?: string|null,
     *     configuration: Shapes\AssetFilterConfiguration,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
