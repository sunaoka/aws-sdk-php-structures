<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property string $DataSetId
 * @property string $RevisionId
 */
class ExportAssetToSignedUrlRequestDetails extends Shape
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
