<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RedshiftDataShareAssetSourceEntry> $AssetSources
 * @property string $DataSetId
 * @property string $RevisionId
 */
class ImportAssetsFromRedshiftDataSharesResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetSources: list<RedshiftDataShareAssetSourceEntry>,
     *     DataSetId: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
