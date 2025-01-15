<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $exampleChatMessages
 * @property list<Rule> $rules
 */
class TopicConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     exampleChatMessages?: list<string>|null,
     *     rules: list<Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
