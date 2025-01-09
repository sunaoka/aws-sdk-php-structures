<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT'|'BASE_REF'|'HEAD_REF'|'ACTOR_ACCOUNT_ID'|'FILE_PATH'|'COMMIT_MESSAGE'|'WORKFLOW_NAME'|'TAG_NAME'|'RELEASE_NAME'|'REPOSITORY_NAME' $type
 * @property string $pattern
 * @property bool $excludeMatchedPattern
 */
class WebhookFilter extends Shape
{
    /**
     * @param array{
     *     type: 'EVENT'|'BASE_REF'|'HEAD_REF'|'ACTOR_ACCOUNT_ID'|'FILE_PATH'|'COMMIT_MESSAGE'|'WORKFLOW_NAME'|'TAG_NAME'|'RELEASE_NAME'|'REPOSITORY_NAME',
     *     pattern: string,
     *     excludeMatchedPattern?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
