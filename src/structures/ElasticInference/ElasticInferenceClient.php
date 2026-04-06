<?php

namespace Sunaoka\Aws\Structures\ElasticInference;

class ElasticInferenceClient extends \Aws\ElasticInference\ElasticInferenceClient
{
    use DescribeAcceleratorOfferings\DescribeAcceleratorOfferingsTrait;
    use DescribeAcceleratorTypes\DescribeAcceleratorTypesTrait;
    use DescribeAccelerators\DescribeAcceleratorsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
