<?php

namespace Sunaoka\Aws\Structures\Emr\GetBlockPublicAccessConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 * @property string $CreatedByArn
 */
class BlockPublicAccessConfigurationMetadata extends Shape
{
    /**
     * @param array{
     *     CreationDateTime: \Aws\Api\DateTimeResult,
     *     CreatedByArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
