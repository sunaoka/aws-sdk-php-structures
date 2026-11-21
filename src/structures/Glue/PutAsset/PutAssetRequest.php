<?php

namespace Sunaoka\Aws\Structures\Glue\PutAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AssetTypeIdentifier
 * @property string $Identifier
 * @property string $Name
 * @property string|null $Description
 * @property array<string, Shapes\AssetFormInput> $Forms
 * @property string|null $ClientToken
 */
class PutAssetRequest extends Request
{
    /**
     * @param array{
     *     AssetTypeIdentifier?: string|null,
     *     Identifier: string,
     *     Name: string,
     *     Description?: string|null,
     *     Forms: array<string, Shapes\AssetFormInput>,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
