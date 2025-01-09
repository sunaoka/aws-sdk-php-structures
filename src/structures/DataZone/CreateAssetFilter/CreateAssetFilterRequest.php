<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetIdentifier
 * @property string $clientToken
 * @property Shapes\AssetFilterConfiguration $configuration
 * @property string $description
 * @property string $domainIdentifier
 * @property string $name
 */
class CreateAssetFilterRequest extends Request
{
    /**
     * @param array{
     *     assetIdentifier: string,
     *     clientToken?: string,
     *     configuration: Shapes\AssetFilterConfiguration,
     *     description?: string,
     *     domainIdentifier: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
