<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT'|'BASE_REF'|'HEAD_REF'|'ACTOR_ACCOUNT_ID'|'FILE_PATH'|'COMMIT_MESSAGE' $type
 * @property string $pattern
 * @property bool|null $excludeMatchedPattern
 */
class WebhookFilter extends Shape
{
    /**
     * @param array{
     *     type: 'EVENT'|'BASE_REF'|'HEAD_REF'|'ACTOR_ACCOUNT_ID'|'FILE_PATH'|'COMMIT_MESSAGE',
     *     pattern: string,
     *     excludeMatchedPattern?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
