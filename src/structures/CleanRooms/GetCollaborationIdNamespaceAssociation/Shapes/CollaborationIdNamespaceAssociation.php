<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetCollaborationIdNamespaceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $name
 * @property string|null $description
 * @property string $creatorAccountId
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property IdNamespaceAssociationInputReferenceProperties $inputReferenceProperties
 * @property IdMappingConfig|null $idMappingConfig
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
     *     description?: string|null,
     *     creatorAccountId: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     inputReferenceConfig: IdNamespaceAssociationInputReferenceConfig,
     *     inputReferenceProperties: IdNamespaceAssociationInputReferenceProperties,
     *     idMappingConfig?: IdMappingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
