<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLenses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF'|null $LensType
 * @property 'ALL'|'DRAFT'|'PUBLISHED'|null $LensStatus
 * @property string|null $LensName
 */
class ListLensesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     LensType?: 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF'|null,
     *     LensStatus?: 'ALL'|'DRAFT'|'PUBLISHED'|null,
     *     LensName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
