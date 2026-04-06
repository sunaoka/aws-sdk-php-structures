<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentBlockerRule|null $contentBlockerRule
 * @property ContentRetrievalRule|null $contentRetrievalRule
 */
class RuleConfiguration extends Shape
{
    /**
     * @param array{
     *     contentBlockerRule?: ContentBlockerRule|null,
     *     contentRetrievalRule?: ContentRetrievalRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
