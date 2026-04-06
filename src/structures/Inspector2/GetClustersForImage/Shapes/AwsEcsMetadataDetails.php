<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detailsGroup
 * @property string $taskDefinitionArn
 */
class AwsEcsMetadataDetails extends Shape
{
    /**
     * @param array{
     *     detailsGroup: string,
     *     taskDefinitionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
