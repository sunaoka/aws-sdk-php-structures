<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetId
 * @property string $DataSetId
 * @property string $RevisionId
 */
class GetAssetRequest extends Request
{
    /**
     * @param array{
     *     AssetId: string,
     *     DataSetId: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
