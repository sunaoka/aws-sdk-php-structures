<?php

namespace Sunaoka\Aws\Structures\Connect\CreateParticipant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string|null $ClientToken
 * @property Shapes\ParticipantDetailsToAdd $ParticipantDetails
 */
class CreateParticipantRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ClientToken?: string|null,
     *     ParticipantDetails: Shapes\ParticipantDetailsToAdd
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
