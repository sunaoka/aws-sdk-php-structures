<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $datasetId
 * @property bool $autoUpdate
 * @property list<string> $sortColumns
 * @property list<string> $partitionColumns
 * @property int $asOfTimestamp
 * @property Shapes\DataViewDestinationTypeParams $destinationTypeParams
 */
class CreateDataViewRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     datasetId: string,
     *     autoUpdate?: bool,
     *     sortColumns?: list<string>,
     *     partitionColumns?: list<string>,
     *     asOfTimestamp?: int,
     *     destinationTypeParams: Shapes\DataViewDestinationTypeParams
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
