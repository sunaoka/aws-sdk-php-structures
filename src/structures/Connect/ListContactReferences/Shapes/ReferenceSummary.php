<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UrlReference $Url
 * @property AttachmentReference $Attachment
 * @property EmailMessageReference $EmailMessage
 * @property StringReference $String
 * @property NumberReference $Number
 * @property DateReference $Date
 * @property EmailReference $Email
 */
class ReferenceSummary extends Shape
{
    /**
     * @param array{
     *     Url?: UrlReference,
     *     Attachment?: AttachmentReference,
     *     EmailMessage?: EmailMessageReference,
     *     String?: StringReference,
     *     Number?: NumberReference,
     *     Date?: DateReference,
     *     Email?: EmailReference
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
