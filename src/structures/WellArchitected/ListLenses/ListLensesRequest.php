<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLenses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 * @property 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF' $LensType
 * @property 'ALL'|'DRAFT'|'PUBLISHED' $LensStatus
 * @property string $LensName
 */
class ListLensesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>,
     *     LensType?: 'AWS_OFFICIAL'|'CUSTOM_SHARED'|'CUSTOM_SELF',
     *     LensStatus?: 'ALL'|'DRAFT'|'PUBLISHED',
     *     LensName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
