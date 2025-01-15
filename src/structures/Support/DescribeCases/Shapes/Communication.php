<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $caseId
 * @property string|null $body
 * @property string|null $submittedBy
 * @property string|null $timeCreated
 * @property list<AttachmentDetails>|null $attachmentSet
 */
class Communication extends Shape
{
    /**
     * @param array{
     *     caseId?: string|null,
     *     body?: string|null,
     *     submittedBy?: string|null,
     *     timeCreated?: string|null,
     *     attachmentSet?: list<AttachmentDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
