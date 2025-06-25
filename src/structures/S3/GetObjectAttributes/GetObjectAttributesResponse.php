<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $DeleteMarker
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $VersionId
 * @property 'requester'|null $RequestCharged
 * @property string|null $ETag
 * @property Shapes\Checksum|null $Checksum
 * @property Shapes\GetObjectAttributesParts|null $ObjectParts
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE'|'FSX_OPENZFS'|null $StorageClass
 * @property int|null $ObjectSize
 */
class GetObjectAttributesResponse extends Response
{
}
