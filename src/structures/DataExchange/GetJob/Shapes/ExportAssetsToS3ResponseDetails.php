<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AssetDestinationEntry> $AssetDestinations
 * @property string $DataSetId
 * @property ExportServerSideEncryption|null $Encryption
 * @property string $RevisionId
 */
class ExportAssetsToS3ResponseDetails extends Shape
{
    /**
     * @param array{
     *     AssetDestinations: list<AssetDestinationEntry>,
     *     DataSetId: string,
     *     Encryption?: ExportServerSideEncryption|null,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
