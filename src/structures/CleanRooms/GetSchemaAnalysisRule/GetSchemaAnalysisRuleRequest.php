<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetSchemaAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $name
 * @property 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE' $type
 */
class GetSchemaAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     name: string,
     *     type: 'AGGREGATION'|'LIST'|'CUSTOM'|'ID_MAPPING_TABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
