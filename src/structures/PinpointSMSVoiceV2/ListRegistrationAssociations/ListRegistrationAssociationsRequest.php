<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property list<Shapes\RegistrationAssociationFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListRegistrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     Filters?: list<Shapes\RegistrationAssociationFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
