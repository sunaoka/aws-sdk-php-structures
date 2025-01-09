<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeCollection;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, max> $FaceCount
 * @property string $FaceModelVersion
 * @property string $CollectionARN
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property int<0, max> $UserCount
 */
class DescribeCollectionResponse extends Response
{
}
