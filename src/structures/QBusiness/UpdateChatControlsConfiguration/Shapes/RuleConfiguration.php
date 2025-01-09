<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentBlockerRule $contentBlockerRule
 * @property ContentRetrievalRule $contentRetrievalRule
 */
class RuleConfiguration extends Shape
{
    /**
     * @param array{
     *     contentBlockerRule?: ContentBlockerRule,
     *     contentRetrievalRule?: ContentRetrievalRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
