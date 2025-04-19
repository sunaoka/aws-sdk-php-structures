<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $subject
 * @property EmailMessageTemplateContentBody|null $body
 * @property list<EmailHeader>|null $headers
 */
class EmailMessageTemplateContent extends Shape
{
    /**
     * @param array{
     *     subject?: string|null,
     *     body?: EmailMessageTemplateContentBody|null,
     *     headers?: list<EmailHeader>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
