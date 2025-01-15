<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDisassociateApprovalRuleTemplateFromRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class BatchDisassociateApprovalRuleTemplateFromRepositoriesError extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
