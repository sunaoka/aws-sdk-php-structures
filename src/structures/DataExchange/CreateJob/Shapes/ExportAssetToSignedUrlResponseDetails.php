<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssetId
 * @property string $DataSetId
 * @property string $RevisionId
 * @property string|null $SignedUrl
 * @property \Aws\Api\DateTimeResult|null $SignedUrlExpiresAt
 */
class ExportAssetToSignedUrlResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetId: string,
     *     DataSetId: string,
     *     RevisionId: string,
     *     SignedUrl?: string|null,
     *     SignedUrlExpiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
