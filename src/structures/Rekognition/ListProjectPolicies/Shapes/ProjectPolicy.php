<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListProjectPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectArn
 * @property string|null $PolicyName
 * @property string|null $PolicyRevisionId
 * @property string|null $PolicyDocument
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class ProjectPolicy extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string|null,
     *     PolicyName?: string|null,
     *     PolicyRevisionId?: string|null,
     *     PolicyDocument?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
