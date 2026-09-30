<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<'IDENTITY_NAME_CONTAINS'|'IDENTITY_TYPE'|'VERIFICATION_STATUS', string>|null $Filter
 * @property string|null $NextToken
 * @property int|null $PageSize
 */
class ListEmailIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     Filter?: array<'IDENTITY_NAME_CONTAINS'|'IDENTITY_TYPE'|'VERIFICATION_STATUS', string>|null,
     *     NextToken?: string|null,
     *     PageSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
