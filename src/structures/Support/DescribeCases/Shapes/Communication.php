<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property string $body
 * @property string $submittedBy
 * @property string $timeCreated
 * @property list<AttachmentDetails> $attachmentSet
 */
class Communication extends Shape
{
    /**
     * @param array{
     *     caseId?: string,
     *     body?: string,
     *     submittedBy?: string,
     *     timeCreated?: string,
     *     attachmentSet?: list<AttachmentDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
