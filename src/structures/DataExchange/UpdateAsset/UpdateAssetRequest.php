<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssetId
 * @property string $DataSetId
 * @property string $Name
 * @property string $RevisionId
 */
class UpdateAssetRequest extends Request
{
    /**
     * @param array{
     *     AssetId: string,
     *     DataSetId: string,
     *     Name: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
