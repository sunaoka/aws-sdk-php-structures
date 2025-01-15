<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $signalCatalogArn
 * @property string $targetArn
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $expiryTime
 * @property int<0, 4294967295>|null $postTriggerCollectionDuration
 * @property 'OFF'|'SEND_ACTIVE_DTCS'|null $diagnosticsMode
 * @property 'OFF'|'TO_DISK'|null $spoolingMode
 * @property 'OFF'|'SNAPPY'|null $compression
 * @property int<0, max>|null $priority
 * @property list<Shapes\SignalInformation>|null $signalsToCollect
 * @property Shapes\CollectionScheme $collectionScheme
 * @property list<string>|null $dataExtraDimensions
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\DataDestinationConfig>|null $dataDestinationConfigs
 * @property list<Shapes\DataPartition>|null $dataPartitions
 * @property list<Shapes\SignalFetchInformation>|null $signalsToFetch
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     signalCatalogArn: string,
     *     targetArn: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     expiryTime?: \Aws\Api\DateTimeResult|null,
     *     postTriggerCollectionDuration?: int<0, 4294967295>|null,
     *     diagnosticsMode?: 'OFF'|'SEND_ACTIVE_DTCS'|null,
     *     spoolingMode?: 'OFF'|'TO_DISK'|null,
     *     compression?: 'OFF'|'SNAPPY'|null,
     *     priority?: int<0, max>|null,
     *     signalsToCollect?: list<Shapes\SignalInformation>|null,
     *     collectionScheme: Shapes\CollectionScheme,
     *     dataExtraDimensions?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     dataDestinationConfigs?: list<Shapes\DataDestinationConfig>|null,
     *     dataPartitions?: list<Shapes\DataPartition>|null,
     *     signalsToFetch?: list<Shapes\SignalFetchInformation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
