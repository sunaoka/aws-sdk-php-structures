<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsTruncated
 * @property string $Marker
 * @property string $NextMarker
 * @property list<Shapes\ObjectShape> $Contents
 * @property string $Name
 * @property string $Prefix
 * @property string $Delimiter
 * @property int $MaxKeys
 * @property list<Shapes\CommonPrefix> $CommonPrefixes
 * @property 'url' $EncodingType
 * @property 'requester' $RequestCharged
 */
class ListObjectsResponse extends Response
{
}
