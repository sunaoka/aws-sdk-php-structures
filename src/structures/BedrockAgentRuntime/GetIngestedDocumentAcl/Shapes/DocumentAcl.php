<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetIngestedDocumentAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAclMembership|null $allowList
 * @property DocumentAclMembership|null $denyList
 */
class DocumentAcl extends Shape
{
    /**
     * @param array{
     *     allowList?: DocumentAclMembership|null,
     *     denyList?: DocumentAclMembership|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
