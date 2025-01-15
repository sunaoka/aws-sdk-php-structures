<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, max>|null $FaceCount
 * @property string|null $FaceModelVersion
 * @property string|null $CollectionARN
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property int<0, max>|null $UserCount
 */
class DescribeCollectionResponse extends Response
{
}
