<?php

namespace Sunaoka\Aws\Structures\Glue\PutAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetTypeId
 * @property string $Identifier
 * @property string $Name
 * @property string|null $Description
 * @property array<string, Shapes\AssetFormEntry> $Forms
 * @property string|null $ClientToken
 */
class PutAssetRequest extends Request
{
    /**
     * @param array{
     *     AssetTypeId: string,
     *     Identifier: string,
     *     Name: string,
     *     Description?: string|null,
     *     Forms: array<string, Shapes\AssetFormEntry>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
