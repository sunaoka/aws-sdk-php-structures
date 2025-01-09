<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectsV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsTruncated
 * @property list<Shapes\ObjectShape> $Contents
 * @property string $Name
 * @property string $Prefix
 * @property string $Delimiter
 * @property int $MaxKeys
 * @property list<Shapes\CommonPrefix> $CommonPrefixes
 * @property 'url' $EncodingType
 * @property int $KeyCount
 * @property string $ContinuationToken
 * @property string $NextContinuationToken
 * @property string $StartAfter
 * @property 'requester' $RequestCharged
 */
class ListObjectsV2Response extends Response
{
}
