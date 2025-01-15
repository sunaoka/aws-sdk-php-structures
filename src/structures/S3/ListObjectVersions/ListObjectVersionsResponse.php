<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsTruncated
 * @property string|null $KeyMarker
 * @property string|null $VersionIdMarker
 * @property string|null $NextKeyMarker
 * @property string|null $NextVersionIdMarker
 * @property list<Shapes\ObjectVersion>|null $Versions
 * @property list<Shapes\DeleteMarkerEntry>|null $DeleteMarkers
 * @property string|null $Name
 * @property string|null $Prefix
 * @property string|null $Delimiter
 * @property int|null $MaxKeys
 * @property list<Shapes\CommonPrefix>|null $CommonPrefixes
 * @property 'url'|null $EncodingType
 * @property 'requester'|null $RequestCharged
 */
class ListObjectVersionsResponse extends Response
{
}
