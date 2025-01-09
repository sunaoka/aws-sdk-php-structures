<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $FaceCount
 * @property string $FaceModelVersion
 * @property string $CollectionARN
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property int $UserCount
 */
class DescribeCollectionResponse extends Response
{
}
