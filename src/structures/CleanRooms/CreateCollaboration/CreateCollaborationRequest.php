<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MemberSpecification> $members
 * @property string $name
 * @property string $description
 * @property list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'> $creatorMemberAbilities
 * @property Shapes\MLMemberAbilities|null $creatorMLMemberAbilities
 * @property string $creatorDisplayName
 * @property Shapes\DataEncryptionMetadata|null $dataEncryptionMetadata
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property 'ENABLED'|'DISABLED'|null $jobLogStatus
 * @property array<string, string>|null $tags
 * @property Shapes\PaymentConfiguration|null $creatorPaymentConfiguration
 * @property 'SPARK'|'CLEAN_ROOMS_SQL'|null $analyticsEngine
 */
class CreateCollaborationRequest extends Request
{
    /**
     * @param array{
     *     members: list<Shapes\MemberSpecification>,
     *     name: string,
     *     description: string,
     *     creatorMemberAbilities: list<'CAN_QUERY'|'CAN_RECEIVE_RESULTS'|'CAN_RUN_JOB'>,
     *     creatorMLMemberAbilities?: Shapes\MLMemberAbilities|null,
     *     creatorDisplayName: string,
     *     dataEncryptionMetadata?: Shapes\DataEncryptionMetadata|null,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     jobLogStatus?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null,
     *     creatorPaymentConfiguration?: Shapes\PaymentConfiguration|null,
     *     analyticsEngine?: 'SPARK'|'CLEAN_ROOMS_SQL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
