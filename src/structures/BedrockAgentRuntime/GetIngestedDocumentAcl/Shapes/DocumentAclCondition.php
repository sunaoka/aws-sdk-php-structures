<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetIngestedDocumentAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND'|'OR'|null $conditionOperator
 * @property list<DocumentAclGroup>|null $groups
 * @property list<DocumentAclUser>|null $users
 */
class DocumentAclCondition extends Shape
{
    /**
     * @param array{
     *     conditionOperator?: 'AND'|'OR'|null,
     *     groups?: list<DocumentAclGroup>|null,
     *     users?: list<DocumentAclUser>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
