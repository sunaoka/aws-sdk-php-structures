<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetObjectTypeAttributeStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $ObjectTypeName
 * @property string $AttributeName
 */
class GetObjectTypeAttributeStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     ObjectTypeName: string,
     *     AttributeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
