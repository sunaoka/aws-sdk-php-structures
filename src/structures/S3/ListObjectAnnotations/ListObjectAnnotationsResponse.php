<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectAnnotations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AnnotationEntry>|null $Annotations
 * @property string|null $Bucket
 * @property string|null $Key
 * @property string|null $ObjectVersionId
 * @property string|null $AnnotationPrefix
 * @property int<1, 1000>|null $MaxAnnotationResults
 * @property int|null $AnnotationCount
 * @property string|null $ContinuationToken
 * @property string|null $NextContinuationToken
 * @property 'requester'|null $RequestCharged
 */
class ListObjectAnnotationsResponse extends Response
{
}
