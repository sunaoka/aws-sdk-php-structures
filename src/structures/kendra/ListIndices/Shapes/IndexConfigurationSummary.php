<?php

namespace Sunaoka\Aws\Structures\kendra\ListIndices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION' $Edition
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'SYSTEM_UPDATING' $Status
 */
class IndexConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     Edition?: 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION',
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     Status: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'SYSTEM_UPDATING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
