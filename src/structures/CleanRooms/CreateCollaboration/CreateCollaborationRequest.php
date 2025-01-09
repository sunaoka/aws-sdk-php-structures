<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MemberSpecification> $members
 * @property string $name
 * @property string $description
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'> $creatorMemberAbilities
 * @property Shapes\MLMemberAbilities $creatorMLMemberAbilities
 * @property string $creatorDisplayName
 * @property Shapes\DataEncryptionMetadata $dataEncryptionMetadata
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property array<string, string> $tags
 * @property Shapes\PaymentConfiguration $creatorPaymentConfiguration
 * @property 'SPARK'|'CLEAN_ROOMS_SQL' $analyticsEngine
 */
class CreateCollaborationRequest extends Request
{
    /**
     * @param array{
     *     members: list<Shapes\MemberSpecification>,
     *     name: string,
     *     description: string,
     *     creatorMemberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'>,
     *     creatorMLMemberAbilities?: Shapes\MLMemberAbilities,
     *     creatorDisplayName: string,
     *     dataEncryptionMetadata?: Shapes\DataEncryptionMetadata,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     tags?: array<string, string>,
     *     creatorPaymentConfiguration?: Shapes\PaymentConfiguration,
     *     analyticsEngine?: 'SPARK'|'CLEAN_ROOMS_SQL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
