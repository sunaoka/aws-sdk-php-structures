<?php

namespace Sunaoka\Aws\Structures\MediaStoreData;

class MediaStoreDataClient extends \Aws\MediaStoreData\MediaStoreDataClient
{
    use DeleteObject\DeleteObjectTrait;
    use DescribeObject\DescribeObjectTrait;
    use GetObject\GetObjectTrait;
    use ListItems\ListItemsTrait;
    use PutObject\PutObjectTrait;
}
