<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsTruncated
 * @property string $KeyMarker
 * @property string $VersionIdMarker
 * @property string $NextKeyMarker
 * @property string $NextVersionIdMarker
 * @property list<Shapes\ObjectVersion> $Versions
 * @property list<Shapes\DeleteMarkerEntry> $DeleteMarkers
 * @property string $Name
 * @property string $Prefix
 * @property string $Delimiter
 * @property int $MaxKeys
 * @property list<Shapes\CommonPrefix> $CommonPrefixes
 * @property 'url' $EncodingType
 * @property 'requester' $RequestCharged
 */
class ListObjectVersionsResponse extends Response
{
}
