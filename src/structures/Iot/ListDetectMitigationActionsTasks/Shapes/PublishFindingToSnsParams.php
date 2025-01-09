<?php

namespace Sunaoka\Aws\Structures\Iot\ListDetectMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topicArn
 */
class PublishFindingToSnsParams extends Shape
{
    /**
     * @param array{topicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
