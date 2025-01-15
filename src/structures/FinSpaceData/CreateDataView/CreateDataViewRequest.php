<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetId
 * @property bool|null $autoUpdate
 * @property list<string>|null $sortColumns
 * @property list<string>|null $partitionColumns
 * @property int|null $asOfTimestamp
 * @property Shapes\DataViewDestinationTypeParams $destinationTypeParams
 */
class CreateDataViewRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetId: string,
     *     autoUpdate?: bool|null,
     *     sortColumns?: list<string>|null,
     *     partitionColumns?: list<string>|null,
     *     asOfTimestamp?: int|null,
     *     destinationTypeParams: Shapes\DataViewDestinationTypeParams
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
