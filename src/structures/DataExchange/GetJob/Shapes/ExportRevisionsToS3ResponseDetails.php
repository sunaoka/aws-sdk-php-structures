<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property ExportServerSideEncryption|null $Encryption
 * @property list<RevisionDestinationEntry> $RevisionDestinations
 * @property string|null $EventActionArn
 */
class ExportRevisionsToS3ResponseDetails extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Encryption?: ExportServerSideEncryption|null,
     *     RevisionDestinations: list<RevisionDestinationEntry>,
     *     EventActionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
