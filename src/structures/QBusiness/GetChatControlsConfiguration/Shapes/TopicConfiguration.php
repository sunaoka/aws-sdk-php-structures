<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $exampleChatMessages
 * @property list<Rule> $rules
 */
class TopicConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     exampleChatMessages?: list<string>,
     *     rules: list<Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
