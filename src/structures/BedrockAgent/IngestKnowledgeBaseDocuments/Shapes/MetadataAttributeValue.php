<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BOOLEAN'|'NUMBER'|'STRING'|'STRING_LIST' $type
 * @property double|null $numberValue
 * @property bool|null $booleanValue
 * @property string|null $stringValue
 * @property list<string>|null $stringListValue
 */
class MetadataAttributeValue extends Shape
{
    /**
     * @param array{
     *     type: 'BOOLEAN'|'NUMBER'|'STRING'|'STRING_LIST',
     *     numberValue?: double|null,
     *     booleanValue?: bool|null,
     *     stringValue?: string|null,
     *     stringListValue?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
