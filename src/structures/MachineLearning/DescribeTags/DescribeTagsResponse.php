<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeTags;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ResourceId
 * @property 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel' $ResourceType
 * @property list<Shapes\Tag> $Tags
 */
class DescribeTagsResponse extends Response
{
}
