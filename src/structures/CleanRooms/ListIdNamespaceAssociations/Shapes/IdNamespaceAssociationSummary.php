<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListIdNamespaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $id
 * @property string $arn
 * @property IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property string $name
 * @property string|null $description
 * @property IdNamespaceAssociationInputReferencePropertiesSummary $inputReferenceProperties
 */
class IdNamespaceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     arn: string,
     *     inputReferenceConfig: IdNamespaceAssociationInputReferenceConfig,
     *     name: string,
     *     description?: string|null,
     *     inputReferenceProperties: IdNamespaceAssociationInputReferencePropertiesSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
