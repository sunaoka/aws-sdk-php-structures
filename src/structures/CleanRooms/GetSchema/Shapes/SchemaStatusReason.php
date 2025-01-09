<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ANALYSIS_RULE_MISSING'|'ANALYSIS_TEMPLATES_NOT_CONFIGURED'|'ANALYSIS_PROVIDERS_NOT_CONFIGURED'|'DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED'|'ID_MAPPING_TABLE_NOT_POPULATED'|'COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED'|'ADDITIONAL_ANALYSES_NOT_CONFIGURED'|'RESULT_RECEIVERS_NOT_CONFIGURED'|'ADDITIONAL_ANALYSES_NOT_ALLOWED'|'RESULT_RECEIVERS_NOT_ALLOWED'|'ANALYSIS_RULE_TYPES_NOT_COMPATIBLE' $code
 * @property string $message
 */
class SchemaStatusReason extends Shape
{
    /**
     * @param array{
     *     code: 'ANALYSIS_RULE_MISSING'|'ANALYSIS_TEMPLATES_NOT_CONFIGURED'|'ANALYSIS_PROVIDERS_NOT_CONFIGURED'|'DIFFERENTIAL_PRIVACY_POLICY_NOT_CONFIGURED'|'ID_MAPPING_TABLE_NOT_POPULATED'|'COLLABORATION_ANALYSIS_RULE_NOT_CONFIGURED'|'ADDITIONAL_ANALYSES_NOT_CONFIGURED'|'RESULT_RECEIVERS_NOT_CONFIGURED'|'ADDITIONAL_ANALYSES_NOT_ALLOWED'|'RESULT_RECEIVERS_NOT_ALLOWED'|'ANALYSIS_RULE_TYPES_NOT_COMPATIBLE',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
