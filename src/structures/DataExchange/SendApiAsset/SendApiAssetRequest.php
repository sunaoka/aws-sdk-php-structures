<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendApiAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Body
 * @property array<string, string>|null $QueryStringParameters
 * @property string $AssetId
 * @property string $DataSetId
 * @property array<string, string>|null $RequestHeaders
 * @property string|null $Method
 * @property string|null $Path
 * @property string $RevisionId
 */
class SendApiAssetRequest extends Request
{
    /**
     * @param array{
     *     Body?: string|null,
     *     QueryStringParameters?: array<string, string>|null,
     *     AssetId: string,
     *     DataSetId: string,
     *     RequestHeaders?: array<string, string>|null,
     *     Method?: string|null,
     *     Path?: string|null,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
