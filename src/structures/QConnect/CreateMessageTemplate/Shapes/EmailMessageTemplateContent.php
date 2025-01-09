<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailMessageTemplateContentBody $body
 * @property list<EmailHeader> $headers
 * @property string $subject
 */
class EmailMessageTemplateContent extends Shape
{
    /**
     * @param array{
     *     body?: EmailMessageTemplateContentBody,
     *     headers?: list<EmailHeader>,
     *     subject?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
