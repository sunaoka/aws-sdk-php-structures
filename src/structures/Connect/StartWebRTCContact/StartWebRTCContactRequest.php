<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Attributes
 * @property string|null $ClientToken
 * @property string $ContactFlowId
 * @property string $InstanceId
 * @property Shapes\AllowedCapabilities|null $AllowedCapabilities
 * @property Shapes\ParticipantDetails $ParticipantDetails
 * @property string|null $RelatedContactId
 * @property array<string, Shapes\Reference>|null $References
 * @property string|null $Description
 */
class StartWebRTCContactRequest extends Request
{
    /**
     * @param array{
     *     Attributes?: array<string, string>|null,
     *     ClientToken?: string|null,
     *     ContactFlowId: string,
     *     InstanceId: string,
     *     AllowedCapabilities?: Shapes\AllowedCapabilities|null,
     *     ParticipantDetails: Shapes\ParticipantDetails,
     *     RelatedContactId?: string|null,
     *     References?: array<string, Shapes\Reference>|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
