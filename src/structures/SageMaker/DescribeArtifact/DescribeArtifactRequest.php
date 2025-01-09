<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArtifactArn
 */
class DescribeArtifactRequest extends Request
{
    /**
     * @param array{ArtifactArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
