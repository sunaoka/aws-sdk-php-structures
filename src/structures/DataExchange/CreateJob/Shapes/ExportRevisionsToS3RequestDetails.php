<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property ExportServerSideEncryption|null $Encryption
 * @property list<RevisionDestinationEntry> $RevisionDestinations
 */
class ExportRevisionsToS3RequestDetails extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Encryption?: ExportServerSideEncryption|null,
     *     RevisionDestinations: list<RevisionDestinationEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
