<?php

namespace Sunaoka\Aws\Structures\S3\ListParts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $AbortDate
 * @property string|null $AbortRuleId
 * @property string|null $Bucket
 * @property string|null $Key
 * @property string|null $UploadId
 * @property int|null $PartNumberMarker
 * @property int|null $NextPartNumberMarker
 * @property int|null $MaxParts
 * @property bool|null $IsTruncated
 * @property list<Shapes\Part>|null $Parts
 * @property Shapes\Initiator|null $Initiator
 * @property Shapes\Owner|null $Owner
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|'FSX_ONTAP'|null $StorageClass
 * @property 'requester'|null $RequestCharged
 * @property 'CRC32'|'CRC32C'|'SHA1'|'SHA256'|'CRC64NVME'|null $ChecksumAlgorithm
 * @property 'COMPOSITE'|'FULL_OBJECT'|null $ChecksumType
 */
class ListPartsResponse extends Response
{
}
