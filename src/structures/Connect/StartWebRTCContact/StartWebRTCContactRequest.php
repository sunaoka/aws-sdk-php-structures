<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Attributes
 * @property string $ClientToken
 * @property string $ContactFlowId
 * @property string $InstanceId
 * @property Shapes\AllowedCapabilities $AllowedCapabilities
 * @property Shapes\ParticipantDetails $ParticipantDetails
 * @property string $RelatedContactId
 * @property array<string, Shapes\Reference> $References
 * @property string $Description
 */
class StartWebRTCContactRequest extends Request
{
    /**
     * @param array{
     *     Attributes?: array<string, string>,
     *     ClientToken?: string,
     *     ContactFlowId: string,
     *     InstanceId: string,
     *     AllowedCapabilities?: Shapes\AllowedCapabilities,
     *     ParticipantDetails: Shapes\ParticipantDetails,
     *     RelatedContactId?: string,
     *     References?: array<string, Shapes\Reference>,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
