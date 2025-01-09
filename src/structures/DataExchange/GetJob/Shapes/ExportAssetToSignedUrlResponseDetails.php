<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property string $DataSetId
 * @property string $RevisionId
 * @property string $SignedUrl
 * @property \Aws\Api\DateTimeResult $SignedUrlExpiresAt
 */
class ExportAssetToSignedUrlResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetId: string,
     *     DataSetId: string,
     *     RevisionId: string,
     *     SignedUrl?: string,
     *     SignedUrlExpiresAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
