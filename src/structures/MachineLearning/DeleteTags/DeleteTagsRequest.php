<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DeleteTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TagKeys
 * @property string $ResourceId
 * @property 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel' $ResourceType
 */
class DeleteTagsRequest extends Request
{
    /**
     * @param array{
     *     TagKeys: list<string>,
     *     ResourceId: string,
     *     ResourceType: 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
