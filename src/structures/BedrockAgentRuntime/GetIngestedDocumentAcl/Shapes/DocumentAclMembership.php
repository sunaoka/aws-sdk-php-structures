<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetIngestedDocumentAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DocumentAclCondition>|null $conditions
 * @property 'AND'|'OR'|null $memberRelation
 */
class DocumentAclMembership extends Shape
{
    /**
     * @param array{
     *     conditions?: list<DocumentAclCondition>|null,
     *     memberRelation?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
