<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associationId
 * @property string $sourceId
 * @property 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|'BEDROCK_KB_S3'|'BEDROCK_KB_WEB'|'BEDROCK_KB_CONFLUENCE'|'BEDROCK_KB_SALESFORCE'|'BEDROCK_KB_SHAREPOINT'|'BEDROCK_KB_KENDRA'|'BEDROCK_KB_CUSTOM_DOCUMENT'|'BEDROCK_KB_SQL' $referenceType
 * @property string $contentText
 */
class RetrieveResult extends Shape
{
    /**
     * @param array{
     *     associationId: string,
     *     sourceId: string,
     *     referenceType: 'WEB_CRAWLER'|'KNOWLEDGE_BASE'|'BEDROCK_KB_S3'|'BEDROCK_KB_WEB'|'BEDROCK_KB_CONFLUENCE'|'BEDROCK_KB_SALESFORCE'|'BEDROCK_KB_SHAREPOINT'|'BEDROCK_KB_KENDRA'|'BEDROCK_KB_CUSTOM_DOCUMENT'|'BEDROCK_KB_SQL',
     *     contentText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
