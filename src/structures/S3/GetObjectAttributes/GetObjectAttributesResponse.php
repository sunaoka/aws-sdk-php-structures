<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAttributes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $DeleteMarker
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $VersionId
 * @property 'requester' $RequestCharged
 * @property string $ETag
 * @property Shapes\Checksum $Checksum
 * @property Shapes\GetObjectAttributesParts $ObjectParts
 * @property 'STANDARD'|'REDUCED_REDUNDANCY'|'STANDARD_IA'|'ONEZONE_IA'|'INTELLIGENT_TIERING'|'GLACIER'|'DEEP_ARCHIVE'|'OUTPOSTS'|'GLACIER_IR'|'SNOW'|'EXPRESS_ONEZONE' $StorageClass
 * @property int $ObjectSize
 */
class GetObjectAttributesResponse extends Response
{
}
