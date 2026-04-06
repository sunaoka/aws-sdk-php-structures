<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MemberSpecification> $members
 * @property string $name
 * @property string $description
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'> $creatorMemberAbilities
 * @property string $creatorDisplayName
 * @property Shapes\DataEncryptionMetadata|null $dataEncryptionMetadata
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property array<string, string>|null $tags
 */
class CreateCollaborationRequest extends Request
{
    /**
     * @param array{
     *     members: list<Shapes\MemberSpecification>,
     *     name: string,
     *     description: string,
     *     creatorMemberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'>,
     *     creatorDisplayName: string,
     *     dataEncryptionMetadata?: Shapes\DataEncryptionMetadata|null,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
