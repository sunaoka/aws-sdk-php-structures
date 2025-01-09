<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string $description
 * @property string $signalCatalogArn
 * @property string $targetArn
 * @property 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $expiryTime
 * @property int $postTriggerCollectionDuration
 * @property 'OFF'|'SEND_ACTIVE_DTCS' $diagnosticsMode
 * @property 'OFF'|'TO_DISK' $spoolingMode
 * @property 'OFF'|'SNAPPY' $compression
 * @property int $priority
 * @property list<Shapes\SignalInformation> $signalsToCollect
 * @property Shapes\CollectionScheme $collectionScheme
 * @property list<string> $dataExtraDimensions
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property list<Shapes\DataDestinationConfig> $dataDestinationConfigs
 * @property list<Shapes\DataPartition> $dataPartitions
 * @property list<Shapes\SignalFetchInformation> $signalsToFetch
 */
class GetCampaignResponse extends Response
{
}
