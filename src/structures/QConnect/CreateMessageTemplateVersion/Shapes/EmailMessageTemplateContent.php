<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailMessageTemplateContentBody|null $body
 * @property list<EmailHeader>|null $headers
 * @property string|null $subject
 */
class EmailMessageTemplateContent extends Shape
{
    /**
     * @param array{
     *     body?: EmailMessageTemplateContentBody|null,
     *     headers?: list<EmailHeader>|null,
     *     subject?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
