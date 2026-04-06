<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $description
 * @property string|null $signalCatalogArn
 * @property string|null $targetArn
 * @property 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $expiryTime
 * @property int<0, 4294967295>|null $postTriggerCollectionDuration
 * @property 'OFF'|'SEND_ACTIVE_DTCS'|null $diagnosticsMode
 * @property 'OFF'|'TO_DISK'|null $spoolingMode
 * @property 'OFF'|'SNAPPY'|null $compression
 * @property int<0, max>|null $priority
 * @property list<Shapes\SignalInformation>|null $signalsToCollect
 * @property Shapes\CollectionScheme|null $collectionScheme
 * @property list<string>|null $dataExtraDimensions
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModificationTime
 * @property list<Shapes\DataDestinationConfig>|null $dataDestinationConfigs
 * @property list<Shapes\DataPartition>|null $dataPartitions
 * @property list<Shapes\SignalFetchInformation>|null $signalsToFetch
 */
class GetCampaignResponse extends Response
{
}
