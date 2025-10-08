<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $projectName
 * @property string|null $integrationArn
 * @property 'GITHUB'|'GITLAB_SELF_MANAGED'|null $providerType
 */
class CodeRepositoryDetails extends Shape
{
    /**
     * @param array{
     *     projectName?: string|null,
     *     integrationArn?: string|null,
     *     providerType?: 'GITHUB'|'GITLAB_SELF_MANAGED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
