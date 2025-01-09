<?php

namespace Sunaoka\Aws\Structures\MachineLearning\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag> $Tags
 * @property string $ResourceId
 * @property 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel' $ResourceType
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     Tags: list<Shapes\Tag>,
     *     ResourceId: string,
     *     ResourceType: 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
