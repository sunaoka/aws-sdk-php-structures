<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentNatConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $AttachmentId
 * @property array<string, list<string>>|null $Filters
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAttachmentNatConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     AttachmentId?: string|null,
     *     Filters?: array<string, list<string>>|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
