<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $signalCatalogArn
 * @property string $targetArn
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property int<0, 4294967295> $postTriggerCollectionDuration
 * @property 'OFF'|'SEND_ACTIVE_DTCS' $diagnosticsMode
 * @property 'OFF'|'TO_DISK' $spoolingMode
 * @property 'OFF'|'SNAPPY' $compression
 * @property int<0, max> $priority
 * @property list<Shapes\SignalInformation> $signalsToCollect
 * @property Shapes\CollectionScheme $collectionScheme
 * @property list<string> $dataExtraDimensions
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\DataDestinationConfig> $dataDestinationConfigs
 * @property list<Shapes\DataPartition> $dataPartitions
 * @property list<Shapes\SignalFetchInformation> $signalsToFetch
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     signalCatalogArn: string,
     *     targetArn: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     expiryTime?: \Aws\Api\DateTimeResult,
     *     postTriggerCollectionDuration?: int<0, 4294967295>,
     *     diagnosticsMode?: 'OFF'|'SEND_ACTIVE_DTCS',
     *     spoolingMode?: 'OFF'|'TO_DISK',
     *     compression?: 'OFF'|'SNAPPY',
     *     priority?: int<0, max>,
     *     signalsToCollect?: list<Shapes\SignalInformation>,
     *     collectionScheme: Shapes\CollectionScheme,
     *     dataExtraDimensions?: list<string>,
     *     tags?: list<Shapes\Tag>,
     *     dataDestinationConfigs?: list<Shapes\DataDestinationConfig>,
     *     dataPartitions?: list<Shapes\DataPartition>,
     *     signalsToFetch?: list<Shapes\SignalFetchInformation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
