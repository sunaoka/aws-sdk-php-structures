<?php

namespace Sunaoka\Aws\Structures\S3\ListMultipartUploads;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Bucket
 * @property string|null $KeyMarker
 * @property string|null $UploadIdMarker
 * @property string|null $NextKeyMarker
 * @property string|null $Prefix
 * @property string|null $Delimiter
 * @property string|null $NextUploadIdMarker
 * @property int|null $MaxUploads
 * @property bool|null $IsTruncated
 * @property list<Shapes\MultipartUpload>|null $Uploads
 * @property list<Shapes\CommonPrefix>|null $CommonPrefixes
 * @property 'url'|null $EncodingType
 * @property 'requester'|null $RequestCharged
 */
class ListMultipartUploadsResponse extends Response
{
}
