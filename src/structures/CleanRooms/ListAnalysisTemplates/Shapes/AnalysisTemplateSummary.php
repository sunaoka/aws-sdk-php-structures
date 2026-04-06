<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListAnalysisTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $membershipArn
 * @property string $membershipId
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property string|null $description
 */
class AnalysisTemplateSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     name: string,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     membershipArn: string,
     *     membershipId: string,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
