<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel' $ResourceType
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     ResourceType: 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
