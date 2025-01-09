<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DistributionConfigWithTags $DistributionConfigWithTags
 */
class CreateDistributionWithTagsRequest extends Request
{
    /**
     * @param array{DistributionConfigWithTags: Shapes\DistributionConfigWithTags} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
