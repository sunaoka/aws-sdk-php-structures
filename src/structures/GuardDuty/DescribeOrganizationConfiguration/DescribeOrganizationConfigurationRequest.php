<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribeOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
