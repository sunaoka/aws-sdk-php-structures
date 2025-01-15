<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeTags;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceId
 * @property 'BatchPrediction'|'DataSource'|'Evaluation'|'MLModel'|null $ResourceType
 * @property list<Shapes\Tag>|null $Tags
 */
class DescribeTagsResponse extends Response
{
}
