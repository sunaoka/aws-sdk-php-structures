<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $booleanValue
 * @property double|null $numberValue
 * @property list<string>|null $stringListValue
 * @property string|null $stringValue
 * @property 'BOOLEAN'|'NUMBER'|'STRING'|'STRING_LIST' $type
 */
class MetadataAttributeValue extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool|null,
     *     numberValue?: double|null,
     *     stringListValue?: list<string>|null,
     *     stringValue?: string|null,
     *     type: 'BOOLEAN'|'NUMBER'|'STRING'|'STRING_LIST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
