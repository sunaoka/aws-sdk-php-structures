<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListComplianceStatusRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
