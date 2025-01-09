<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchDisassociateApprovalRuleTemplateFromRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchDisassociateApprovalRuleTemplateFromRepositoriesError extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
