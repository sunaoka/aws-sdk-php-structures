<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $booleanValue
 * @property double $numberValue
 * @property list<string> $stringListValue
 * @property string $stringValue
 * @property 'BOOLEAN'|'NUMBER'|'STRING'|'STRING_LIST' $type
 */
class MetadataAttributeValue extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool,
     *     numberValue?: double,
     *     stringListValue?: list<string>,
     *     stringValue?: string,
     *     type: 'BOOLEAN'|'NUMBER'|'STRING'|'STRING_LIST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
