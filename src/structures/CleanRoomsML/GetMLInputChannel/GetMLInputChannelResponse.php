<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetMLInputChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property Shapes\InputChannel $inputChannel
 * @property string $protectedQueryIdentifier
 * @property string $mlInputChannelArn
 * @property string $name
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE' $status
 * @property Shapes\StatusDetails $statusDetails
 * @property int<1, 30> $retentionInDays
 * @property int<0, 100000000000> $numberOfRecords
 * @property double $numberOfFiles
 * @property double $sizeInGb
 * @property string $description
 * @property string $kmsKeyArn
 * @property array<string, string> $tags
 */
class GetMLInputChannelResponse extends Response
{
}
