<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdMappingTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property string $membershipId
 * @property string $membershipArn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $id
 * @property string $arn
 * @property string $description
 * @property IdMappingTableInputReferenceConfig $inputReferenceConfig
 * @property string $name
 */
class IdMappingTableSummary extends Shape
{
    /**
     * @param array{
     *     collaborationArn: string,
     *     collaborationId: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     arn: string,
     *     description?: string,
     *     inputReferenceConfig: IdMappingTableInputReferenceConfig,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
