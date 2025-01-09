<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ID'|'String'|'Int'|'Float'|'AWSDate'|'AWSTime'|'AWSDateTime'|'AWSTimestamp'|'AWSEmail'|'AWSURL'|'AWSIPAddress'|'Boolean'|'AWSJSON'|'AWSPhone'|'Enum'|'Model'|'NonModel' $dataType
 * @property string $dataTypeValue
 * @property bool $required
 * @property bool $readOnly
 * @property bool $isArray
 * @property CodegenGenericDataRelationshipType $relationship
 */
class CodegenGenericDataField extends Shape
{
    /**
     * @param array{
     *     dataType: 'ID'|'String'|'Int'|'Float'|'AWSDate'|'AWSTime'|'AWSDateTime'|'AWSTimestamp'|'AWSEmail'|'AWSURL'|'AWSIPAddress'|'Boolean'|'AWSJSON'|'AWSPhone'|'Enum'|'Model'|'NonModel',
     *     dataTypeValue: string,
     *     required: bool,
     *     readOnly: bool,
     *     isArray: bool,
     *     relationship?: CodegenGenericDataRelationshipType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
