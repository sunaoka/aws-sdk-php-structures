<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UrlReference|null $Url
 * @property AttachmentReference|null $Attachment
 * @property EmailMessageReference|null $EmailMessage
 * @property StringReference|null $String
 * @property NumberReference|null $Number
 * @property DateReference|null $Date
 * @property EmailReference|null $Email
 */
class ReferenceSummary extends Shape
{
    /**
     * @param array{
     *     Url?: UrlReference|null,
     *     Attachment?: AttachmentReference|null,
     *     EmailMessage?: EmailMessageReference|null,
     *     String?: StringReference|null,
     *     Number?: NumberReference|null,
     *     Date?: DateReference|null,
     *     Email?: EmailReference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
