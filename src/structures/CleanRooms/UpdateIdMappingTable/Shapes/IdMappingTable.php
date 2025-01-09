<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdMappingTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property IdMappingTableInputReferenceConfig $inputReferenceConfig
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $description
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property IdMappingTableInputReferenceProperties $inputReferenceProperties
 * @property string $kmsKeyArn
 */
class IdMappingTable extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     inputReferenceConfig: IdMappingTableInputReferenceConfig,
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     description?: string,
     *     name: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     inputReferenceProperties: IdMappingTableInputReferenceProperties,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
