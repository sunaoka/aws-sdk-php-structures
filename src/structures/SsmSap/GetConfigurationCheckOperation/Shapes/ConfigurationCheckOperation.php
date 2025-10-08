<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetConfigurationCheckOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ApplicationId
 * @property 'INPROGRESS'|'SUCCESS'|'ERROR'|null $Status
 * @property string|null $StatusMessage
 * @property 'SAP_CHECK_01'|'SAP_CHECK_02'|'SAP_CHECK_03'|null $ConfigurationCheckId
 * @property string|null $ConfigurationCheckName
 * @property string|null $ConfigurationCheckDescription
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property RuleStatusCounts|null $RuleStatusCounts
 */
class ConfigurationCheckOperation extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ApplicationId?: string|null,
     *     Status?: 'INPROGRESS'|'SUCCESS'|'ERROR'|null,
     *     StatusMessage?: string|null,
     *     ConfigurationCheckId?: 'SAP_CHECK_01'|'SAP_CHECK_02'|'SAP_CHECK_03'|null,
     *     ConfigurationCheckName?: string|null,
     *     ConfigurationCheckDescription?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     RuleStatusCounts?: RuleStatusCounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
