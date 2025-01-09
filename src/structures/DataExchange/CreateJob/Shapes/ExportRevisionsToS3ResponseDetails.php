<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property ExportServerSideEncryption $Encryption
 * @property list<RevisionDestinationEntry> $RevisionDestinations
 * @property string $EventActionArn
 */
class ExportRevisionsToS3ResponseDetails extends Shape
{
    /**
     * @param array{
     *     DataSetId: string,
     *     Encryption?: ExportServerSideEncryption,
     *     RevisionDestinations: list<RevisionDestinationEntry>,
     *     EventActionArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
