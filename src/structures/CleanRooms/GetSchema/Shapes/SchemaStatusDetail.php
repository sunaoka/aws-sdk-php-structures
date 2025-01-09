<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READY'|'NOT_READY' $status
 * @property list<SchemaStatusReason> $reasons
 * @property 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE' $analysisRuleType
 * @property list<'DIFFERENTIAL_PRIVACY'> $configurations
 * @property 'DIRECT_ANALYSIS'|'ADDITIONAL_ANALYSIS' $analysisType
 */
class SchemaStatusDetail extends Shape
{
    /**
     * @param array{
     *     status: 'READY'|'NOT_READY',
     *     reasons?: list<SchemaStatusReason>,
     *     analysisRuleType?: 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE',
     *     configurations?: list<'DIFFERENTIAL_PRIVACY'>,
     *     analysisType: 'DIRECT_ANALYSIS'|'ADDITIONAL_ANALYSIS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
