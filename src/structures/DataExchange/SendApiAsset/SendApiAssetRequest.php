<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendApiAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Body
 * @property array<string, string> $QueryStringParameters
 * @property string $AssetId
 * @property string $DataSetId
 * @property array<string, string> $RequestHeaders
 * @property string $Method
 * @property string $Path
 * @property string $RevisionId
 */
class SendApiAssetRequest extends Request
{
    /**
     * @param array{
     *     Body?: string,
     *     QueryStringParameters?: array<string, string>,
     *     AssetId: string,
     *     DataSetId: string,
     *     RequestHeaders?: array<string, string>,
     *     Method?: string,
     *     Path?: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
