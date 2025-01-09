<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetSourceEntry> $AssetSources
 * @property string $DataSetId
 * @property string $RevisionId
 */
class ImportAssetsFromS3ResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetSources: list<AssetSourceEntry>,
     *     DataSetId: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
