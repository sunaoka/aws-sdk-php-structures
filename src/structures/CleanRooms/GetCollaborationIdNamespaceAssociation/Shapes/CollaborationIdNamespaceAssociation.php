<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationIdNamespaceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $name
 * @property string $description
 * @property string $creatorAccountId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property IdNamespaceAssociationInputReferenceProperties $inputReferenceProperties
 * @property IdMappingConfig $idMappingConfig
 */
class CollaborationIdNamespaceAssociation extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     name: string,
     *     description?: string,
     *     creatorAccountId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     inputReferenceConfig: IdNamespaceAssociationInputReferenceConfig,
     *     inputReferenceProperties: IdNamespaceAssociationInputReferenceProperties,
     *     idMappingConfig?: IdMappingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
