<?php

namespace Sunaoka\Aws\Structures\MediaStore;

class MediaStoreClient extends \Aws\MediaStore\MediaStoreClient
{
    use CreateContainer\CreateContainerTrait;
    use DeleteContainer\DeleteContainerTrait;
    use DeleteContainerPolicy\DeleteContainerPolicyTrait;
    use DeleteCorsPolicy\DeleteCorsPolicyTrait;
    use DeleteLifecyclePolicy\DeleteLifecyclePolicyTrait;
    use DeleteMetricPolicy\DeleteMetricPolicyTrait;
    use DescribeContainer\DescribeContainerTrait;
    use GetContainerPolicy\GetContainerPolicyTrait;
    use GetCorsPolicy\GetCorsPolicyTrait;
    use GetLifecyclePolicy\GetLifecyclePolicyTrait;
    use GetMetricPolicy\GetMetricPolicyTrait;
    use ListContainers\ListContainersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutContainerPolicy\PutContainerPolicyTrait;
    use PutCorsPolicy\PutCorsPolicyTrait;
    use PutLifecyclePolicy\PutLifecyclePolicyTrait;
    use PutMetricPolicy\PutMetricPolicyTrait;
    use StartAccessLogging\StartAccessLoggingTrait;
    use StopAccessLogging\StopAccessLoggingTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
