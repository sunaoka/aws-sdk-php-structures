<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListProjectPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 * @property string $PolicyName
 * @property string $PolicyRevisionId
 * @property string $PolicyDocument
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class ProjectPolicy extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string,
     *     PolicyName?: string,
     *     PolicyRevisionId?: string,
     *     PolicyDocument?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
