<?php

namespace Sunaoka\Aws\Structures\Glue\PutAssetType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property array<string, Shapes\AssetTypeFormReference> $Forms
 * @property string|null $ClientToken
 */
class PutAssetTypeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Forms: array<string, Shapes\AssetTypeFormReference>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
