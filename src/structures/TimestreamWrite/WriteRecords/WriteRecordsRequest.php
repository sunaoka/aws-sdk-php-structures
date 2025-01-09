<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\WriteRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property Shapes\Record $CommonAttributes
 * @property list<Shapes\Record> $Records
 */
class WriteRecordsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     CommonAttributes?: Shapes\Record,
     *     Records: list<Shapes\Record>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
