<?php

namespace Sunaoka\Aws\Structures\S3\ListParts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $AbortDate
 * @property string $AbortRuleId
 * @property string $Bucket
 * @property string $Key
 * @property string $UploadId
 * @property int $PartNumberMarker
 * @property int $NextPartNumberMarker
 * @property int $MaxParts
 * @property bool $IsTruncated
 * @property list<Shapes\Part> $Parts
 * @property Shapes\Initiator $Initiator
 * @property Shapes\Owner $Owner
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property 'requester' $RequestCharged
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256' $ChecksumAlgorithm
 */
class ListPartsResponse extends Response
{
}
