<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore;

class CloudFrontKeyValueStoreClient extends \Aws\CloudFrontKeyValueStore\CloudFrontKeyValueStoreClient
{
    use DeleteKey\DeleteKeyTrait;
    use DescribeKeyValueStore\DescribeKeyValueStoreTrait;
    use GetKey\GetKeyTrait;
    use ListKeys\ListKeysTrait;
    use PutKey\PutKeyTrait;
    use UpdateKeys\UpdateKeysTrait;
}
