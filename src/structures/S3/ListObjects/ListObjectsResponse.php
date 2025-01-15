<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsTruncated
 * @property string|null $Marker
 * @property string|null $NextMarker
 * @property list<Shapes\ObjectShape>|null $Contents
 * @property string|null $Name
 * @property string|null $Prefix
 * @property string|null $Delimiter
 * @property int|null $MaxKeys
 * @property list<Shapes\CommonPrefix>|null $CommonPrefixes
 * @property 'url'|null $EncodingType
 * @property 'requester'|null $RequestCharged
 */
class ListObjectsResponse extends Response
{
}
