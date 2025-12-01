<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationAnalysisTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property string $creatorAccountId
 * @property string|null $description
 * @property bool|null $isSyntheticData
 */
class CollaborationAnalysisTemplateSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     name: string,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     creatorAccountId: string,
     *     description?: string|null,
     *     isSyntheticData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
