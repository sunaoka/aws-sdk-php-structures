<?php

namespace Sunaoka\Aws\Structures\Connect\CreatePersistentContactAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $InitialContactId
 * @property 'ENTIRE_PAST_SESSION'|'FROM_SEGMENT' $RehydrationType
 * @property string $SourceContactId
 * @property string|null $ClientToken
 */
class CreatePersistentContactAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InitialContactId: string,
     *     RehydrationType: 'ENTIRE_PAST_SESSION'|'FROM_SEGMENT',
     *     SourceContactId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
