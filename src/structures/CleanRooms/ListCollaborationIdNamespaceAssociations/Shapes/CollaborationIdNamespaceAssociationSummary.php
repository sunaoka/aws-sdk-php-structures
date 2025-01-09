<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationIdNamespaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createTime
 * @property string $id
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $collaborationArn
 * @property string $collaborationId
 * @property string $creatorAccountId
 * @property IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property string $name
 * @property string $description
 * @property IdNamespaceAssociationInputReferencePropertiesSummary $inputReferenceProperties
 */
class CollaborationIdNamespaceAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     collaborationArn: string,
     *     collaborationId: string,
     *     creatorAccountId: string,
     *     inputReferenceConfig: IdNamespaceAssociationInputReferenceConfig,
     *     name: string,
     *     description?: string,
     *     inputReferenceProperties: IdNamespaceAssociationInputReferencePropertiesSummary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
