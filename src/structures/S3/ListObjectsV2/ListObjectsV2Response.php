<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectsV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IsTruncated
 * @property list<Shapes\ObjectShape>|null $Contents
 * @property string|null $Name
 * @property string|null $Prefix
 * @property string|null $Delimiter
 * @property int|null $MaxKeys
 * @property list<Shapes\CommonPrefix>|null $CommonPrefixes
 * @property 'url'|null $EncodingType
 * @property int|null $KeyCount
 * @property string|null $ContinuationToken
 * @property string|null $NextContinuationToken
 * @property string|null $StartAfter
 * @property 'requester'|null $RequestCharged
 */
class ListObjectsV2Response extends Response
{
}
