<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIdNamespaceAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $collaborationId
 * @property string $collaborationArn
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property IdNamespaceAssociationInputReferenceConfig $inputReferenceConfig
 * @property IdNamespaceAssociationInputReferenceProperties $inputReferenceProperties
 * @property IdMappingConfig $idMappingConfig
 */
class IdNamespaceAssociation extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     collaborationId: string,
     *     collaborationArn: string,
     *     name: string,
     *     description?: string,
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
