<?php

namespace Sunaoka\Aws\Structures\S3\ListMultipartUploads;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Bucket
 * @property string $KeyMarker
 * @property string $UploadIdMarker
 * @property string $NextKeyMarker
 * @property string $Prefix
 * @property string $Delimiter
 * @property string $NextUploadIdMarker
 * @property int $MaxUploads
 * @property bool $IsTruncated
 * @property list<Shapes\MultipartUpload> $Uploads
 * @property list<Shapes\CommonPrefix> $CommonPrefixes
 * @property 'url' $EncodingType
 * @property 'requester' $RequestCharged
 */
class ListMultipartUploadsResponse extends Response
{
}
