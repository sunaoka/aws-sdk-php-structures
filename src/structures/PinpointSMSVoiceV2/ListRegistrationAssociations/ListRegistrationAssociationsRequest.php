<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property list<Shapes\RegistrationAssociationFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListRegistrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     Filters?: list<Shapes\RegistrationAssociationFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
