<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READY'|'NOT_READY' $status
 * @property list<SchemaStatusReason>|null $reasons
 * @property 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'|null $analysisRuleType
 * @property list<'DIFFERENTIAL_PRIVACY'>|null $configurations
 * @property 'DIRECT_ANALYSIS'|'ADDITIONAL_ANALYSIS' $analysisType
 */
class SchemaStatusDetail extends Shape
{
    /**
     * @param array{
     *     status: 'READY'|'NOT_READY',
     *     reasons?: list<SchemaStatusReason>|null,
     *     analysisRuleType?: 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'|null,
     *     configurations?: list<'DIFFERENTIAL_PRIVACY'>|null,
     *     analysisType: 'DIRECT_ANALYSIS'|'ADDITIONAL_ANALYSIS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
