<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property Shapes\InputChannel $inputChannel
 * @property string|null $protectedQueryIdentifier
 * @property string $mlInputChannelArn
 * @property string $name
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE' $status
 * @property Shapes\StatusDetails|null $statusDetails
 * @property int<1, 30> $retentionInDays
 * @property int<0, 100000000000>|null $numberOfRecords
 * @property double|null $numberOfFiles
 * @property double|null $sizeInGb
 * @property string|null $description
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class GetMLInputChannelResponse extends Response
{
}
